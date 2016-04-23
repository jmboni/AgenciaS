<?php

namespace Agencia\BaseDatosBundle\Model\Base;

use \Exception;
use \PDO;
use Agencia\BaseDatosBundle\Model\CategoriaAfiliado as ChildCategoriaAfiliado;
use Agencia\BaseDatosBundle\Model\CategoriaAfiliadoQuery as ChildCategoriaAfiliadoQuery;
use Agencia\BaseDatosBundle\Model\Map\CategoriaAfiliadoTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'categoria_afiliado' table.
 *
 * 
 *
 * @method     ChildCategoriaAfiliadoQuery orderByCategoriaId($order = Criteria::ASC) Order by the categoria_id column
 * @method     ChildCategoriaAfiliadoQuery orderByAfiliadoId($order = Criteria::ASC) Order by the afiliado_id column
 *
 * @method     ChildCategoriaAfiliadoQuery groupByCategoriaId() Group by the categoria_id column
 * @method     ChildCategoriaAfiliadoQuery groupByAfiliadoId() Group by the afiliado_id column
 *
 * @method     ChildCategoriaAfiliadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCategoriaAfiliadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCategoriaAfiliadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCategoriaAfiliadoQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCategoriaAfiliadoQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCategoriaAfiliadoQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCategoriaAfiliadoQuery leftJoinCategoria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Categoria relation
 * @method     ChildCategoriaAfiliadoQuery rightJoinCategoria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Categoria relation
 * @method     ChildCategoriaAfiliadoQuery innerJoinCategoria($relationAlias = null) Adds a INNER JOIN clause to the query using the Categoria relation
 *
 * @method     ChildCategoriaAfiliadoQuery joinWithCategoria($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Categoria relation
 *
 * @method     ChildCategoriaAfiliadoQuery leftJoinWithCategoria() Adds a LEFT JOIN clause and with to the query using the Categoria relation
 * @method     ChildCategoriaAfiliadoQuery rightJoinWithCategoria() Adds a RIGHT JOIN clause and with to the query using the Categoria relation
 * @method     ChildCategoriaAfiliadoQuery innerJoinWithCategoria() Adds a INNER JOIN clause and with to the query using the Categoria relation
 *
 * @method     ChildCategoriaAfiliadoQuery leftJoinAfiliados($relationAlias = null) Adds a LEFT JOIN clause to the query using the Afiliados relation
 * @method     ChildCategoriaAfiliadoQuery rightJoinAfiliados($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Afiliados relation
 * @method     ChildCategoriaAfiliadoQuery innerJoinAfiliados($relationAlias = null) Adds a INNER JOIN clause to the query using the Afiliados relation
 *
 * @method     ChildCategoriaAfiliadoQuery joinWithAfiliados($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Afiliados relation
 *
 * @method     ChildCategoriaAfiliadoQuery leftJoinWithAfiliados() Adds a LEFT JOIN clause and with to the query using the Afiliados relation
 * @method     ChildCategoriaAfiliadoQuery rightJoinWithAfiliados() Adds a RIGHT JOIN clause and with to the query using the Afiliados relation
 * @method     ChildCategoriaAfiliadoQuery innerJoinWithAfiliados() Adds a INNER JOIN clause and with to the query using the Afiliados relation
 *
 * @method     \Agencia\BaseDatosBundle\Model\CategoriaQuery|\Agencia\BaseDatosBundle\Model\AfiliadosQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCategoriaAfiliado findOne(ConnectionInterface $con = null) Return the first ChildCategoriaAfiliado matching the query
 * @method     ChildCategoriaAfiliado findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCategoriaAfiliado matching the query, or a new ChildCategoriaAfiliado object populated from the query conditions when no match is found
 *
 * @method     ChildCategoriaAfiliado findOneByCategoriaId(int $categoria_id) Return the first ChildCategoriaAfiliado filtered by the categoria_id column
 * @method     ChildCategoriaAfiliado findOneByAfiliadoId(int $afiliado_id) Return the first ChildCategoriaAfiliado filtered by the afiliado_id column *

 * @method     ChildCategoriaAfiliado requirePk($key, ConnectionInterface $con = null) Return the ChildCategoriaAfiliado by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCategoriaAfiliado requireOne(ConnectionInterface $con = null) Return the first ChildCategoriaAfiliado matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCategoriaAfiliado requireOneByCategoriaId(int $categoria_id) Return the first ChildCategoriaAfiliado filtered by the categoria_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCategoriaAfiliado requireOneByAfiliadoId(int $afiliado_id) Return the first ChildCategoriaAfiliado filtered by the afiliado_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCategoriaAfiliado[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCategoriaAfiliado objects based on current ModelCriteria
 * @method     ChildCategoriaAfiliado[]|ObjectCollection findByCategoriaId(int $categoria_id) Return ChildCategoriaAfiliado objects filtered by the categoria_id column
 * @method     ChildCategoriaAfiliado[]|ObjectCollection findByAfiliadoId(int $afiliado_id) Return ChildCategoriaAfiliado objects filtered by the afiliado_id column
 * @method     ChildCategoriaAfiliado[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CategoriaAfiliadoQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Agencia\BaseDatosBundle\Model\Base\CategoriaAfiliadoQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Agencia\\BaseDatosBundle\\Model\\CategoriaAfiliado', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCategoriaAfiliadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCategoriaAfiliadoQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCategoriaAfiliadoQuery) {
            return $criteria;
        }
        $query = new ChildCategoriaAfiliadoQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$categoria_id, $afiliado_id] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCategoriaAfiliado|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CategoriaAfiliadoTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CategoriaAfiliadoTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCategoriaAfiliado A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT categoria_id, afiliado_id FROM categoria_afiliado WHERE categoria_id = :p0 AND afiliado_id = :p1';
        try {
            $stmt = $con->prepare($sql);            
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);            
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCategoriaAfiliado $obj */
            $obj = new ChildCategoriaAfiliado();
            $obj->hydrate($row);
            CategoriaAfiliadoTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildCategoriaAfiliado|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCategoriaAfiliadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CategoriaAfiliadoTableMap::COL_CATEGORIA_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CategoriaAfiliadoTableMap::COL_AFILIADO_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCategoriaAfiliadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CategoriaAfiliadoTableMap::COL_CATEGORIA_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CategoriaAfiliadoTableMap::COL_AFILIADO_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the categoria_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoriaId(1234); // WHERE categoria_id = 1234
     * $query->filterByCategoriaId(array(12, 34)); // WHERE categoria_id IN (12, 34)
     * $query->filterByCategoriaId(array('min' => 12)); // WHERE categoria_id > 12
     * </code>
     *
     * @see       filterByCategoria()
     *
     * @param     mixed $categoriaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCategoriaAfiliadoQuery The current query, for fluid interface
     */
    public function filterByCategoriaId($categoriaId = null, $comparison = null)
    {
        if (is_array($categoriaId)) {
            $useMinMax = false;
            if (isset($categoriaId['min'])) {
                $this->addUsingAlias(CategoriaAfiliadoTableMap::COL_CATEGORIA_ID, $categoriaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categoriaId['max'])) {
                $this->addUsingAlias(CategoriaAfiliadoTableMap::COL_CATEGORIA_ID, $categoriaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CategoriaAfiliadoTableMap::COL_CATEGORIA_ID, $categoriaId, $comparison);
    }

    /**
     * Filter the query on the afiliado_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAfiliadoId(1234); // WHERE afiliado_id = 1234
     * $query->filterByAfiliadoId(array(12, 34)); // WHERE afiliado_id IN (12, 34)
     * $query->filterByAfiliadoId(array('min' => 12)); // WHERE afiliado_id > 12
     * </code>
     *
     * @see       filterByAfiliados()
     *
     * @param     mixed $afiliadoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCategoriaAfiliadoQuery The current query, for fluid interface
     */
    public function filterByAfiliadoId($afiliadoId = null, $comparison = null)
    {
        if (is_array($afiliadoId)) {
            $useMinMax = false;
            if (isset($afiliadoId['min'])) {
                $this->addUsingAlias(CategoriaAfiliadoTableMap::COL_AFILIADO_ID, $afiliadoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($afiliadoId['max'])) {
                $this->addUsingAlias(CategoriaAfiliadoTableMap::COL_AFILIADO_ID, $afiliadoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CategoriaAfiliadoTableMap::COL_AFILIADO_ID, $afiliadoId, $comparison);
    }

    /**
     * Filter the query by a related \Agencia\BaseDatosBundle\Model\Categoria object
     *
     * @param \Agencia\BaseDatosBundle\Model\Categoria|ObjectCollection $categoria The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCategoriaAfiliadoQuery The current query, for fluid interface
     */
    public function filterByCategoria($categoria, $comparison = null)
    {
        if ($categoria instanceof \Agencia\BaseDatosBundle\Model\Categoria) {
            return $this
                ->addUsingAlias(CategoriaAfiliadoTableMap::COL_CATEGORIA_ID, $categoria->getId(), $comparison);
        } elseif ($categoria instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CategoriaAfiliadoTableMap::COL_CATEGORIA_ID, $categoria->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCategoria() only accepts arguments of type \Agencia\BaseDatosBundle\Model\Categoria or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Categoria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCategoriaAfiliadoQuery The current query, for fluid interface
     */
    public function joinCategoria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Categoria');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Categoria');
        }

        return $this;
    }

    /**
     * Use the Categoria relation Categoria object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Agencia\BaseDatosBundle\Model\CategoriaQuery A secondary query class using the current class as primary query
     */
    public function useCategoriaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCategoria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Categoria', '\Agencia\BaseDatosBundle\Model\CategoriaQuery');
    }

    /**
     * Filter the query by a related \Agencia\BaseDatosBundle\Model\Afiliados object
     *
     * @param \Agencia\BaseDatosBundle\Model\Afiliados|ObjectCollection $afiliados The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCategoriaAfiliadoQuery The current query, for fluid interface
     */
    public function filterByAfiliados($afiliados, $comparison = null)
    {
        if ($afiliados instanceof \Agencia\BaseDatosBundle\Model\Afiliados) {
            return $this
                ->addUsingAlias(CategoriaAfiliadoTableMap::COL_AFILIADO_ID, $afiliados->getId(), $comparison);
        } elseif ($afiliados instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CategoriaAfiliadoTableMap::COL_AFILIADO_ID, $afiliados->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByAfiliados() only accepts arguments of type \Agencia\BaseDatosBundle\Model\Afiliados or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Afiliados relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCategoriaAfiliadoQuery The current query, for fluid interface
     */
    public function joinAfiliados($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Afiliados');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Afiliados');
        }

        return $this;
    }

    /**
     * Use the Afiliados relation Afiliados object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Agencia\BaseDatosBundle\Model\AfiliadosQuery A secondary query class using the current class as primary query
     */
    public function useAfiliadosQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAfiliados($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Afiliados', '\Agencia\BaseDatosBundle\Model\AfiliadosQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCategoriaAfiliado $categoriaAfiliado Object to remove from the list of results
     *
     * @return $this|ChildCategoriaAfiliadoQuery The current query, for fluid interface
     */
    public function prune($categoriaAfiliado = null)
    {
        if ($categoriaAfiliado) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CategoriaAfiliadoTableMap::COL_CATEGORIA_ID), $categoriaAfiliado->getCategoriaId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CategoriaAfiliadoTableMap::COL_AFILIADO_ID), $categoriaAfiliado->getAfiliadoId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the categoria_afiliado table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CategoriaAfiliadoTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CategoriaAfiliadoTableMap::clearInstancePool();
            CategoriaAfiliadoTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CategoriaAfiliadoTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CategoriaAfiliadoTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            CategoriaAfiliadoTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            CategoriaAfiliadoTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CategoriaAfiliadoQuery
