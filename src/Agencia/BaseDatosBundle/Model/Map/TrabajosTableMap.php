<?php

namespace Agencia\BaseDatosBundle\Model\Map;

use Agencia\BaseDatosBundle\Model\Trabajos;
use Agencia\BaseDatosBundle\Model\TrabajosQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'trabajos' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TrabajosTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Agencia.BaseDatosBundle.Model.Map.TrabajosTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'trabajos';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Agencia\\BaseDatosBundle\\Model\\Trabajos';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Agencia.BaseDatosBundle.Model.Trabajos';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the id field
     */
    const COL_ID = 'trabajos.id';

    /**
     * the column name for the categoria_id field
     */
    const COL_CATEGORIA_ID = 'trabajos.categoria_id';

    /**
     * the column name for the tipo field
     */
    const COL_TIPO = 'trabajos.tipo';

    /**
     * the column name for the compania field
     */
    const COL_COMPANIA = 'trabajos.compania';

    /**
     * the column name for the logo field
     */
    const COL_LOGO = 'trabajos.logo';

    /**
     * the column name for the url field
     */
    const COL_URL = 'trabajos.url';

    /**
     * the column name for the posicion field
     */
    const COL_POSICION = 'trabajos.posicion';

    /**
     * the column name for the localidad field
     */
    const COL_LOCALIDAD = 'trabajos.localidad';

    /**
     * the column name for the descripcion field
     */
    const COL_DESCRIPCION = 'trabajos.descripcion';

    /**
     * the column name for the how_to_apply field
     */
    const COL_HOW_TO_APPLY = 'trabajos.how_to_apply';

    /**
     * the column name for the token field
     */
    const COL_TOKEN = 'trabajos.token';

    /**
     * the column name for the publico field
     */
    const COL_PUBLICO = 'trabajos.publico';

    /**
     * the column name for the activado field
     */
    const COL_ACTIVADO = 'trabajos.activado';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'trabajos.email';

    /**
     * the column name for the finaliza field
     */
    const COL_FINALIZA = 'trabajos.finaliza';

    /**
     * the column name for the creado field
     */
    const COL_CREADO = 'trabajos.creado';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'CategoriaId', 'Tipo', 'Compania', 'Logo', 'Url', 'Posicion', 'Localidad', 'Descripcion', 'HowToApply', 'Token', 'Publico', 'Activado', 'Email', 'Finaliza', 'Creado', ),
        self::TYPE_CAMELNAME     => array('id', 'categoriaId', 'tipo', 'compania', 'logo', 'url', 'posicion', 'localidad', 'descripcion', 'howToApply', 'token', 'publico', 'activado', 'email', 'finaliza', 'creado', ),
        self::TYPE_COLNAME       => array(TrabajosTableMap::COL_ID, TrabajosTableMap::COL_CATEGORIA_ID, TrabajosTableMap::COL_TIPO, TrabajosTableMap::COL_COMPANIA, TrabajosTableMap::COL_LOGO, TrabajosTableMap::COL_URL, TrabajosTableMap::COL_POSICION, TrabajosTableMap::COL_LOCALIDAD, TrabajosTableMap::COL_DESCRIPCION, TrabajosTableMap::COL_HOW_TO_APPLY, TrabajosTableMap::COL_TOKEN, TrabajosTableMap::COL_PUBLICO, TrabajosTableMap::COL_ACTIVADO, TrabajosTableMap::COL_EMAIL, TrabajosTableMap::COL_FINALIZA, TrabajosTableMap::COL_CREADO, ),
        self::TYPE_FIELDNAME     => array('id', 'categoria_id', 'tipo', 'compania', 'logo', 'url', 'posicion', 'localidad', 'descripcion', 'how_to_apply', 'token', 'publico', 'activado', 'email', 'finaliza', 'creado', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'CategoriaId' => 1, 'Tipo' => 2, 'Compania' => 3, 'Logo' => 4, 'Url' => 5, 'Posicion' => 6, 'Localidad' => 7, 'Descripcion' => 8, 'HowToApply' => 9, 'Token' => 10, 'Publico' => 11, 'Activado' => 12, 'Email' => 13, 'Finaliza' => 14, 'Creado' => 15, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'categoriaId' => 1, 'tipo' => 2, 'compania' => 3, 'logo' => 4, 'url' => 5, 'posicion' => 6, 'localidad' => 7, 'descripcion' => 8, 'howToApply' => 9, 'token' => 10, 'publico' => 11, 'activado' => 12, 'email' => 13, 'finaliza' => 14, 'creado' => 15, ),
        self::TYPE_COLNAME       => array(TrabajosTableMap::COL_ID => 0, TrabajosTableMap::COL_CATEGORIA_ID => 1, TrabajosTableMap::COL_TIPO => 2, TrabajosTableMap::COL_COMPANIA => 3, TrabajosTableMap::COL_LOGO => 4, TrabajosTableMap::COL_URL => 5, TrabajosTableMap::COL_POSICION => 6, TrabajosTableMap::COL_LOCALIDAD => 7, TrabajosTableMap::COL_DESCRIPCION => 8, TrabajosTableMap::COL_HOW_TO_APPLY => 9, TrabajosTableMap::COL_TOKEN => 10, TrabajosTableMap::COL_PUBLICO => 11, TrabajosTableMap::COL_ACTIVADO => 12, TrabajosTableMap::COL_EMAIL => 13, TrabajosTableMap::COL_FINALIZA => 14, TrabajosTableMap::COL_CREADO => 15, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'categoria_id' => 1, 'tipo' => 2, 'compania' => 3, 'logo' => 4, 'url' => 5, 'posicion' => 6, 'localidad' => 7, 'descripcion' => 8, 'how_to_apply' => 9, 'token' => 10, 'publico' => 11, 'activado' => 12, 'email' => 13, 'finaliza' => 14, 'creado' => 15, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('trabajos');
        $this->setPhpName('Trabajos');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Agencia\\BaseDatosBundle\\Model\\Trabajos');
        $this->setPackage('src.Agencia.BaseDatosBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('categoria_id', 'CategoriaId', 'INTEGER', 'categoria', 'id', true, null, null);
        $this->addColumn('tipo', 'Tipo', 'VARCHAR', false, 255, null);
        $this->addColumn('compania', 'Compania', 'VARCHAR', true, 255, null);
        $this->addColumn('logo', 'Logo', 'VARCHAR', false, 255, null);
        $this->addColumn('url', 'Url', 'VARCHAR', false, 255, null);
        $this->addColumn('posicion', 'Posicion', 'VARCHAR', true, 255, null);
        $this->addColumn('localidad', 'Localidad', 'VARCHAR', true, 255, null);
        $this->addColumn('descripcion', 'Descripcion', 'LONGVARCHAR', true, null, null);
        $this->addColumn('how_to_apply', 'HowToApply', 'LONGVARCHAR', true, null, null);
        $this->addColumn('token', 'Token', 'VARCHAR', true, 255, null);
        $this->addColumn('publico', 'Publico', 'BOOLEAN', true, 1, true);
        $this->addColumn('activado', 'Activado', 'BOOLEAN', true, 1, false);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 255, null);
        $this->addColumn('finaliza', 'Finaliza', 'TIMESTAMP', false, null, null);
        $this->addColumn('creado', 'Creado', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Categoria', '\\Agencia\\BaseDatosBundle\\Model\\Categoria', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':categoria_id',
    1 => ':id',
  ),
), null, null, null, false);
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }
    
    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? TrabajosTableMap::CLASS_DEFAULT : TrabajosTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Trabajos object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TrabajosTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TrabajosTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TrabajosTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TrabajosTableMap::OM_CLASS;
            /** @var Trabajos $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TrabajosTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = TrabajosTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TrabajosTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Trabajos $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TrabajosTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(TrabajosTableMap::COL_ID);
            $criteria->addSelectColumn(TrabajosTableMap::COL_CATEGORIA_ID);
            $criteria->addSelectColumn(TrabajosTableMap::COL_TIPO);
            $criteria->addSelectColumn(TrabajosTableMap::COL_COMPANIA);
            $criteria->addSelectColumn(TrabajosTableMap::COL_LOGO);
            $criteria->addSelectColumn(TrabajosTableMap::COL_URL);
            $criteria->addSelectColumn(TrabajosTableMap::COL_POSICION);
            $criteria->addSelectColumn(TrabajosTableMap::COL_LOCALIDAD);
            $criteria->addSelectColumn(TrabajosTableMap::COL_DESCRIPCION);
            $criteria->addSelectColumn(TrabajosTableMap::COL_HOW_TO_APPLY);
            $criteria->addSelectColumn(TrabajosTableMap::COL_TOKEN);
            $criteria->addSelectColumn(TrabajosTableMap::COL_PUBLICO);
            $criteria->addSelectColumn(TrabajosTableMap::COL_ACTIVADO);
            $criteria->addSelectColumn(TrabajosTableMap::COL_EMAIL);
            $criteria->addSelectColumn(TrabajosTableMap::COL_FINALIZA);
            $criteria->addSelectColumn(TrabajosTableMap::COL_CREADO);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.categoria_id');
            $criteria->addSelectColumn($alias . '.tipo');
            $criteria->addSelectColumn($alias . '.compania');
            $criteria->addSelectColumn($alias . '.logo');
            $criteria->addSelectColumn($alias . '.url');
            $criteria->addSelectColumn($alias . '.posicion');
            $criteria->addSelectColumn($alias . '.localidad');
            $criteria->addSelectColumn($alias . '.descripcion');
            $criteria->addSelectColumn($alias . '.how_to_apply');
            $criteria->addSelectColumn($alias . '.token');
            $criteria->addSelectColumn($alias . '.publico');
            $criteria->addSelectColumn($alias . '.activado');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.finaliza');
            $criteria->addSelectColumn($alias . '.creado');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(TrabajosTableMap::DATABASE_NAME)->getTable(TrabajosTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TrabajosTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TrabajosTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TrabajosTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Trabajos or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Trabajos object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TrabajosTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Agencia\BaseDatosBundle\Model\Trabajos) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TrabajosTableMap::DATABASE_NAME);
            $criteria->add(TrabajosTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = TrabajosQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TrabajosTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TrabajosTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the trabajos table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TrabajosQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Trabajos or Criteria object.
     *
     * @param mixed               $criteria Criteria or Trabajos object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TrabajosTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Trabajos object
        }

        if ($criteria->containsKey(TrabajosTableMap::COL_ID) && $criteria->keyContainsValue(TrabajosTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TrabajosTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = TrabajosQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TrabajosTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TrabajosTableMap::buildTableMap();
