<?php

namespace Agencia\BaseDatosBundle\Model\Base;

use \Exception;
use \PDO;
use Agencia\BaseDatosBundle\Model\Trabajos as ChildTrabajos;
use Agencia\BaseDatosBundle\Model\TrabajosQuery as ChildTrabajosQuery;
use Agencia\BaseDatosBundle\Model\Map\TrabajosTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'trabajos' table.
 *
 * 
 *
 * @method     ChildTrabajosQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildTrabajosQuery orderByCategoriaId($order = Criteria::ASC) Order by the categoria_id column
 * @method     ChildTrabajosQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 * @method     ChildTrabajosQuery orderByCompania($order = Criteria::ASC) Order by the compania column
 * @method     ChildTrabajosQuery orderByLogo($order = Criteria::ASC) Order by the logo column
 * @method     ChildTrabajosQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     ChildTrabajosQuery orderByPosicion($order = Criteria::ASC) Order by the posicion column
 * @method     ChildTrabajosQuery orderByLocalidad($order = Criteria::ASC) Order by the localidad column
 * @method     ChildTrabajosQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     ChildTrabajosQuery orderByHowToApply($order = Criteria::ASC) Order by the how_to_apply column
 * @method     ChildTrabajosQuery orderByToken($order = Criteria::ASC) Order by the token column
 * @method     ChildTrabajosQuery orderByPublico($order = Criteria::ASC) Order by the publico column
 * @method     ChildTrabajosQuery orderByActivado($order = Criteria::ASC) Order by the activado column
 * @method     ChildTrabajosQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildTrabajosQuery orderByFinaliza($order = Criteria::ASC) Order by the finaliza column
 * @method     ChildTrabajosQuery orderByCreado($order = Criteria::ASC) Order by the creado column
 *
 * @method     ChildTrabajosQuery groupById() Group by the id column
 * @method     ChildTrabajosQuery groupByCategoriaId() Group by the categoria_id column
 * @method     ChildTrabajosQuery groupByTipo() Group by the tipo column
 * @method     ChildTrabajosQuery groupByCompania() Group by the compania column
 * @method     ChildTrabajosQuery groupByLogo() Group by the logo column
 * @method     ChildTrabajosQuery groupByUrl() Group by the url column
 * @method     ChildTrabajosQuery groupByPosicion() Group by the posicion column
 * @method     ChildTrabajosQuery groupByLocalidad() Group by the localidad column
 * @method     ChildTrabajosQuery groupByDescripcion() Group by the descripcion column
 * @method     ChildTrabajosQuery groupByHowToApply() Group by the how_to_apply column
 * @method     ChildTrabajosQuery groupByToken() Group by the token column
 * @method     ChildTrabajosQuery groupByPublico() Group by the publico column
 * @method     ChildTrabajosQuery groupByActivado() Group by the activado column
 * @method     ChildTrabajosQuery groupByEmail() Group by the email column
 * @method     ChildTrabajosQuery groupByFinaliza() Group by the finaliza column
 * @method     ChildTrabajosQuery groupByCreado() Group by the creado column
 *
 * @method     ChildTrabajosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTrabajosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTrabajosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTrabajosQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTrabajosQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTrabajosQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTrabajosQuery leftJoinCategoria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Categoria relation
 * @method     ChildTrabajosQuery rightJoinCategoria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Categoria relation
 * @method     ChildTrabajosQuery innerJoinCategoria($relationAlias = null) Adds a INNER JOIN clause to the query using the Categoria relation
 *
 * @method     ChildTrabajosQuery joinWithCategoria($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Categoria relation
 *
 * @method     ChildTrabajosQuery leftJoinWithCategoria() Adds a LEFT JOIN clause and with to the query using the Categoria relation
 * @method     ChildTrabajosQuery rightJoinWithCategoria() Adds a RIGHT JOIN clause and with to the query using the Categoria relation
 * @method     ChildTrabajosQuery innerJoinWithCategoria() Adds a INNER JOIN clause and with to the query using the Categoria relation
 *
 * @method     \Agencia\BaseDatosBundle\Model\CategoriaQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTrabajos findOne(ConnectionInterface $con = null) Return the first ChildTrabajos matching the query
 * @method     ChildTrabajos findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTrabajos matching the query, or a new ChildTrabajos object populated from the query conditions when no match is found
 *
 * @method     ChildTrabajos findOneById(int $id) Return the first ChildTrabajos filtered by the id column
 * @method     ChildTrabajos findOneByCategoriaId(int $categoria_id) Return the first ChildTrabajos filtered by the categoria_id column
 * @method     ChildTrabajos findOneByTipo(string $tipo) Return the first ChildTrabajos filtered by the tipo column
 * @method     ChildTrabajos findOneByCompania(string $compania) Return the first ChildTrabajos filtered by the compania column
 * @method     ChildTrabajos findOneByLogo(string $logo) Return the first ChildTrabajos filtered by the logo column
 * @method     ChildTrabajos findOneByUrl(string $url) Return the first ChildTrabajos filtered by the url column
 * @method     ChildTrabajos findOneByPosicion(string $posicion) Return the first ChildTrabajos filtered by the posicion column
 * @method     ChildTrabajos findOneByLocalidad(string $localidad) Return the first ChildTrabajos filtered by the localidad column
 * @method     ChildTrabajos findOneByDescripcion(string $descripcion) Return the first ChildTrabajos filtered by the descripcion column
 * @method     ChildTrabajos findOneByHowToApply(string $how_to_apply) Return the first ChildTrabajos filtered by the how_to_apply column
 * @method     ChildTrabajos findOneByToken(string $token) Return the first ChildTrabajos filtered by the token column
 * @method     ChildTrabajos findOneByPublico(boolean $publico) Return the first ChildTrabajos filtered by the publico column
 * @method     ChildTrabajos findOneByActivado(boolean $activado) Return the first ChildTrabajos filtered by the activado column
 * @method     ChildTrabajos findOneByEmail(string $email) Return the first ChildTrabajos filtered by the email column
 * @method     ChildTrabajos findOneByFinaliza(string $finaliza) Return the first ChildTrabajos filtered by the finaliza column
 * @method     ChildTrabajos findOneByCreado(string $creado) Return the first ChildTrabajos filtered by the creado column *

 * @method     ChildTrabajos requirePk($key, ConnectionInterface $con = null) Return the ChildTrabajos by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOne(ConnectionInterface $con = null) Return the first ChildTrabajos matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTrabajos requireOneById(int $id) Return the first ChildTrabajos filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByCategoriaId(int $categoria_id) Return the first ChildTrabajos filtered by the categoria_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByTipo(string $tipo) Return the first ChildTrabajos filtered by the tipo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByCompania(string $compania) Return the first ChildTrabajos filtered by the compania column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByLogo(string $logo) Return the first ChildTrabajos filtered by the logo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByUrl(string $url) Return the first ChildTrabajos filtered by the url column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByPosicion(string $posicion) Return the first ChildTrabajos filtered by the posicion column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByLocalidad(string $localidad) Return the first ChildTrabajos filtered by the localidad column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByDescripcion(string $descripcion) Return the first ChildTrabajos filtered by the descripcion column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByHowToApply(string $how_to_apply) Return the first ChildTrabajos filtered by the how_to_apply column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByToken(string $token) Return the first ChildTrabajos filtered by the token column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByPublico(boolean $publico) Return the first ChildTrabajos filtered by the publico column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByActivado(boolean $activado) Return the first ChildTrabajos filtered by the activado column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByEmail(string $email) Return the first ChildTrabajos filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByFinaliza(string $finaliza) Return the first ChildTrabajos filtered by the finaliza column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTrabajos requireOneByCreado(string $creado) Return the first ChildTrabajos filtered by the creado column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTrabajos[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTrabajos objects based on current ModelCriteria
 * @method     ChildTrabajos[]|ObjectCollection findById(int $id) Return ChildTrabajos objects filtered by the id column
 * @method     ChildTrabajos[]|ObjectCollection findByCategoriaId(int $categoria_id) Return ChildTrabajos objects filtered by the categoria_id column
 * @method     ChildTrabajos[]|ObjectCollection findByTipo(string $tipo) Return ChildTrabajos objects filtered by the tipo column
 * @method     ChildTrabajos[]|ObjectCollection findByCompania(string $compania) Return ChildTrabajos objects filtered by the compania column
 * @method     ChildTrabajos[]|ObjectCollection findByLogo(string $logo) Return ChildTrabajos objects filtered by the logo column
 * @method     ChildTrabajos[]|ObjectCollection findByUrl(string $url) Return ChildTrabajos objects filtered by the url column
 * @method     ChildTrabajos[]|ObjectCollection findByPosicion(string $posicion) Return ChildTrabajos objects filtered by the posicion column
 * @method     ChildTrabajos[]|ObjectCollection findByLocalidad(string $localidad) Return ChildTrabajos objects filtered by the localidad column
 * @method     ChildTrabajos[]|ObjectCollection findByDescripcion(string $descripcion) Return ChildTrabajos objects filtered by the descripcion column
 * @method     ChildTrabajos[]|ObjectCollection findByHowToApply(string $how_to_apply) Return ChildTrabajos objects filtered by the how_to_apply column
 * @method     ChildTrabajos[]|ObjectCollection findByToken(string $token) Return ChildTrabajos objects filtered by the token column
 * @method     ChildTrabajos[]|ObjectCollection findByPublico(boolean $publico) Return ChildTrabajos objects filtered by the publico column
 * @method     ChildTrabajos[]|ObjectCollection findByActivado(boolean $activado) Return ChildTrabajos objects filtered by the activado column
 * @method     ChildTrabajos[]|ObjectCollection findByEmail(string $email) Return ChildTrabajos objects filtered by the email column
 * @method     ChildTrabajos[]|ObjectCollection findByFinaliza(string $finaliza) Return ChildTrabajos objects filtered by the finaliza column
 * @method     ChildTrabajos[]|ObjectCollection findByCreado(string $creado) Return ChildTrabajos objects filtered by the creado column
 * @method     ChildTrabajos[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TrabajosQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Agencia\BaseDatosBundle\Model\Base\TrabajosQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Agencia\\BaseDatosBundle\\Model\\Trabajos', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTrabajosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTrabajosQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTrabajosQuery) {
            return $criteria;
        }
        $query = new ChildTrabajosQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildTrabajos|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TrabajosTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TrabajosTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTrabajos A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, categoria_id, tipo, compania, logo, url, posicion, localidad, descripcion, how_to_apply, token, publico, activado, email, finaliza, creado FROM trabajos WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);            
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildTrabajos $obj */
            $obj = new ChildTrabajos();
            $obj->hydrate($row);
            TrabajosTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTrabajos|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
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
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TrabajosTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TrabajosTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TrabajosTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TrabajosTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByCategoriaId($categoriaId = null, $comparison = null)
    {
        if (is_array($categoriaId)) {
            $useMinMax = false;
            if (isset($categoriaId['min'])) {
                $this->addUsingAlias(TrabajosTableMap::COL_CATEGORIA_ID, $categoriaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categoriaId['max'])) {
                $this->addUsingAlias(TrabajosTableMap::COL_CATEGORIA_ID, $categoriaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_CATEGORIA_ID, $categoriaId, $comparison);
    }

    /**
     * Filter the query on the tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByTipo('fooValue');   // WHERE tipo = 'fooValue'
     * $query->filterByTipo('%fooValue%'); // WHERE tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByTipo($tipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipo)) {
                $tipo = str_replace('*', '%', $tipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_TIPO, $tipo, $comparison);
    }

    /**
     * Filter the query on the compania column
     *
     * Example usage:
     * <code>
     * $query->filterByCompania('fooValue');   // WHERE compania = 'fooValue'
     * $query->filterByCompania('%fooValue%'); // WHERE compania LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compania The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByCompania($compania = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compania)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compania)) {
                $compania = str_replace('*', '%', $compania);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_COMPANIA, $compania, $comparison);
    }

    /**
     * Filter the query on the logo column
     *
     * Example usage:
     * <code>
     * $query->filterByLogo('fooValue');   // WHERE logo = 'fooValue'
     * $query->filterByLogo('%fooValue%'); // WHERE logo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByLogo($logo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logo)) {
                $logo = str_replace('*', '%', $logo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_LOGO, $logo, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_URL, $url, $comparison);
    }

    /**
     * Filter the query on the posicion column
     *
     * Example usage:
     * <code>
     * $query->filterByPosicion('fooValue');   // WHERE posicion = 'fooValue'
     * $query->filterByPosicion('%fooValue%'); // WHERE posicion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posicion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByPosicion($posicion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posicion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posicion)) {
                $posicion = str_replace('*', '%', $posicion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_POSICION, $posicion, $comparison);
    }

    /**
     * Filter the query on the localidad column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalidad('fooValue');   // WHERE localidad = 'fooValue'
     * $query->filterByLocalidad('%fooValue%'); // WHERE localidad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localidad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByLocalidad($localidad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localidad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localidad)) {
                $localidad = str_replace('*', '%', $localidad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_LOCALIDAD, $localidad, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the how_to_apply column
     *
     * Example usage:
     * <code>
     * $query->filterByHowToApply('fooValue');   // WHERE how_to_apply = 'fooValue'
     * $query->filterByHowToApply('%fooValue%'); // WHERE how_to_apply LIKE '%fooValue%'
     * </code>
     *
     * @param     string $howToApply The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByHowToApply($howToApply = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($howToApply)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $howToApply)) {
                $howToApply = str_replace('*', '%', $howToApply);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_HOW_TO_APPLY, $howToApply, $comparison);
    }

    /**
     * Filter the query on the token column
     *
     * Example usage:
     * <code>
     * $query->filterByToken('fooValue');   // WHERE token = 'fooValue'
     * $query->filterByToken('%fooValue%'); // WHERE token LIKE '%fooValue%'
     * </code>
     *
     * @param     string $token The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByToken($token = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($token)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $token)) {
                $token = str_replace('*', '%', $token);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_TOKEN, $token, $comparison);
    }

    /**
     * Filter the query on the publico column
     *
     * Example usage:
     * <code>
     * $query->filterByPublico(true); // WHERE publico = true
     * $query->filterByPublico('yes'); // WHERE publico = true
     * </code>
     *
     * @param     boolean|string $publico The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByPublico($publico = null, $comparison = null)
    {
        if (is_string($publico)) {
            $publico = in_array(strtolower($publico), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_PUBLICO, $publico, $comparison);
    }

    /**
     * Filter the query on the activado column
     *
     * Example usage:
     * <code>
     * $query->filterByActivado(true); // WHERE activado = true
     * $query->filterByActivado('yes'); // WHERE activado = true
     * </code>
     *
     * @param     boolean|string $activado The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByActivado($activado = null, $comparison = null)
    {
        if (is_string($activado)) {
            $activado = in_array(strtolower($activado), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_ACTIVADO, $activado, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the finaliza column
     *
     * Example usage:
     * <code>
     * $query->filterByFinaliza('2011-03-14'); // WHERE finaliza = '2011-03-14'
     * $query->filterByFinaliza('now'); // WHERE finaliza = '2011-03-14'
     * $query->filterByFinaliza(array('max' => 'yesterday')); // WHERE finaliza > '2011-03-13'
     * </code>
     *
     * @param     mixed $finaliza The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByFinaliza($finaliza = null, $comparison = null)
    {
        if (is_array($finaliza)) {
            $useMinMax = false;
            if (isset($finaliza['min'])) {
                $this->addUsingAlias(TrabajosTableMap::COL_FINALIZA, $finaliza['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($finaliza['max'])) {
                $this->addUsingAlias(TrabajosTableMap::COL_FINALIZA, $finaliza['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_FINALIZA, $finaliza, $comparison);
    }

    /**
     * Filter the query on the creado column
     *
     * Example usage:
     * <code>
     * $query->filterByCreado('2011-03-14'); // WHERE creado = '2011-03-14'
     * $query->filterByCreado('now'); // WHERE creado = '2011-03-14'
     * $query->filterByCreado(array('max' => 'yesterday')); // WHERE creado > '2011-03-13'
     * </code>
     *
     * @param     mixed $creado The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByCreado($creado = null, $comparison = null)
    {
        if (is_array($creado)) {
            $useMinMax = false;
            if (isset($creado['min'])) {
                $this->addUsingAlias(TrabajosTableMap::COL_CREADO, $creado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($creado['max'])) {
                $this->addUsingAlias(TrabajosTableMap::COL_CREADO, $creado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajosTableMap::COL_CREADO, $creado, $comparison);
    }

    /**
     * Filter the query by a related \Agencia\BaseDatosBundle\Model\Categoria object
     *
     * @param \Agencia\BaseDatosBundle\Model\Categoria|ObjectCollection $categoria The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTrabajosQuery The current query, for fluid interface
     */
    public function filterByCategoria($categoria, $comparison = null)
    {
        if ($categoria instanceof \Agencia\BaseDatosBundle\Model\Categoria) {
            return $this
                ->addUsingAlias(TrabajosTableMap::COL_CATEGORIA_ID, $categoria->getId(), $comparison);
        } elseif ($categoria instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TrabajosTableMap::COL_CATEGORIA_ID, $categoria->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildTrabajos $trabajos Object to remove from the list of results
     *
     * @return $this|ChildTrabajosQuery The current query, for fluid interface
     */
    public function prune($trabajos = null)
    {
        if ($trabajos) {
            $this->addUsingAlias(TrabajosTableMap::COL_ID, $trabajos->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the trabajos table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TrabajosTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TrabajosTableMap::clearInstancePool();
            TrabajosTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TrabajosTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TrabajosTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TrabajosTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TrabajosTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TrabajosQuery
