<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ConfigureBackupPlan
 *
 * @method string getSourceEndpointRegion()
 * @method string getDuplicationArchivePeriod()
 * @method string getBackupGatewayId()
 * @method string getSourceEndpointInstanceID()
 * @method string getSourceEndpointUserName()
 * @method string getClientToken()
 * @method string getSourceEndpointPassword()
 * @method string getBackupPlanId()
 * @method string getBackupObjects()
 * @method string getOwnerId()
 * @method string getSourceEndpointPort()
 * @method string getSourceEndpointDatabaseName()
 * @method string getBackupRetentionPeriod()
 * @method string getDuplicationInfrequentAccessPeriod()
 * @method string getBackupPeriod()
 * @method string getBackupStartTime()
 * @method string getSourceEndpointInstanceType()
 * @method string getSourceEndpointIP()
 * @method string getBackupPlanName()
 * @method string getSourceEndpointOracleSID()
 * @method string getOSSBucketName()
 * @method string getEnableBackupLog()
 */
class ConfigureBackupPlanRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Dbs',
            '2019-03-06',
            'ConfigureBackupPlan',
            'cbs'
        );
    }

    /**
     * @param string $sourceEndpointRegion
     *
     * @return $this
     */
    public function setSourceEndpointRegion($sourceEndpointRegion)
    {
        $this->requestParameters['SourceEndpointRegion'] = $sourceEndpointRegion;
        $this->queryParameters['SourceEndpointRegion'] = $sourceEndpointRegion;

        return $this;
    }

    /**
     * @param string $duplicationArchivePeriod
     *
     * @return $this
     */
    public function setDuplicationArchivePeriod($duplicationArchivePeriod)
    {
        $this->requestParameters['DuplicationArchivePeriod'] = $duplicationArchivePeriod;
        $this->queryParameters['DuplicationArchivePeriod'] = $duplicationArchivePeriod;

        return $this;
    }

    /**
     * @param string $backupGatewayId
     *
     * @return $this
     */
    public function setBackupGatewayId($backupGatewayId)
    {
        $this->requestParameters['BackupGatewayId'] = $backupGatewayId;
        $this->queryParameters['BackupGatewayId'] = $backupGatewayId;

        return $this;
    }

    /**
     * @param string $sourceEndpointInstanceID
     *
     * @return $this
     */
    public function setSourceEndpointInstanceID($sourceEndpointInstanceID)
    {
        $this->requestParameters['SourceEndpointInstanceID'] = $sourceEndpointInstanceID;
        $this->queryParameters['SourceEndpointInstanceID'] = $sourceEndpointInstanceID;

        return $this;
    }

    /**
     * @param string $sourceEndpointUserName
     *
     * @return $this
     */
    public function setSourceEndpointUserName($sourceEndpointUserName)
    {
        $this->requestParameters['SourceEndpointUserName'] = $sourceEndpointUserName;
        $this->queryParameters['SourceEndpointUserName'] = $sourceEndpointUserName;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $sourceEndpointPassword
     *
     * @return $this
     */
    public function setSourceEndpointPassword($sourceEndpointPassword)
    {
        $this->requestParameters['SourceEndpointPassword'] = $sourceEndpointPassword;
        $this->queryParameters['SourceEndpointPassword'] = $sourceEndpointPassword;

        return $this;
    }

    /**
     * @param string $backupPlanId
     *
     * @return $this
     */
    public function setBackupPlanId($backupPlanId)
    {
        $this->requestParameters['BackupPlanId'] = $backupPlanId;
        $this->queryParameters['BackupPlanId'] = $backupPlanId;

        return $this;
    }

    /**
     * @param string $backupObjects
     *
     * @return $this
     */
    public function setBackupObjects($backupObjects)
    {
        $this->requestParameters['BackupObjects'] = $backupObjects;
        $this->queryParameters['BackupObjects'] = $backupObjects;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $sourceEndpointPort
     *
     * @return $this
     */
    public function setSourceEndpointPort($sourceEndpointPort)
    {
        $this->requestParameters['SourceEndpointPort'] = $sourceEndpointPort;
        $this->queryParameters['SourceEndpointPort'] = $sourceEndpointPort;

        return $this;
    }

    /**
     * @param string $sourceEndpointDatabaseName
     *
     * @return $this
     */
    public function setSourceEndpointDatabaseName($sourceEndpointDatabaseName)
    {
        $this->requestParameters['SourceEndpointDatabaseName'] = $sourceEndpointDatabaseName;
        $this->queryParameters['SourceEndpointDatabaseName'] = $sourceEndpointDatabaseName;

        return $this;
    }

    /**
     * @param string $backupRetentionPeriod
     *
     * @return $this
     */
    public function setBackupRetentionPeriod($backupRetentionPeriod)
    {
        $this->requestParameters['BackupRetentionPeriod'] = $backupRetentionPeriod;
        $this->queryParameters['BackupRetentionPeriod'] = $backupRetentionPeriod;

        return $this;
    }

    /**
     * @param string $duplicationInfrequentAccessPeriod
     *
     * @return $this
     */
    public function setDuplicationInfrequentAccessPeriod($duplicationInfrequentAccessPeriod)
    {
        $this->requestParameters['DuplicationInfrequentAccessPeriod'] = $duplicationInfrequentAccessPeriod;
        $this->queryParameters['DuplicationInfrequentAccessPeriod'] = $duplicationInfrequentAccessPeriod;

        return $this;
    }

    /**
     * @param string $backupPeriod
     *
     * @return $this
     */
    public function setBackupPeriod($backupPeriod)
    {
        $this->requestParameters['BackupPeriod'] = $backupPeriod;
        $this->queryParameters['BackupPeriod'] = $backupPeriod;

        return $this;
    }

    /**
     * @param string $backupStartTime
     *
     * @return $this
     */
    public function setBackupStartTime($backupStartTime)
    {
        $this->requestParameters['BackupStartTime'] = $backupStartTime;
        $this->queryParameters['BackupStartTime'] = $backupStartTime;

        return $this;
    }

    /**
     * @param string $sourceEndpointInstanceType
     *
     * @return $this
     */
    public function setSourceEndpointInstanceType($sourceEndpointInstanceType)
    {
        $this->requestParameters['SourceEndpointInstanceType'] = $sourceEndpointInstanceType;
        $this->queryParameters['SourceEndpointInstanceType'] = $sourceEndpointInstanceType;

        return $this;
    }

    /**
     * @param string $sourceEndpointIP
     *
     * @return $this
     */
    public function setSourceEndpointIP($sourceEndpointIP)
    {
        $this->requestParameters['SourceEndpointIP'] = $sourceEndpointIP;
        $this->queryParameters['SourceEndpointIP'] = $sourceEndpointIP;

        return $this;
    }

    /**
     * @param string $backupPlanName
     *
     * @return $this
     */
    public function setBackupPlanName($backupPlanName)
    {
        $this->requestParameters['BackupPlanName'] = $backupPlanName;
        $this->queryParameters['BackupPlanName'] = $backupPlanName;

        return $this;
    }

    /**
     * @param string $sourceEndpointOracleSID
     *
     * @return $this
     */
    public function setSourceEndpointOracleSID($sourceEndpointOracleSID)
    {
        $this->requestParameters['SourceEndpointOracleSID'] = $sourceEndpointOracleSID;
        $this->queryParameters['SourceEndpointOracleSID'] = $sourceEndpointOracleSID;

        return $this;
    }

    /**
     * @param string $oSSBucketName
     *
     * @return $this
     */
    public function setOSSBucketName($oSSBucketName)
    {
        $this->requestParameters['OSSBucketName'] = $oSSBucketName;
        $this->queryParameters['OSSBucketName'] = $oSSBucketName;

        return $this;
    }

    /**
     * @param string $enableBackupLog
     *
     * @return $this
     */
    public function setEnableBackupLog($enableBackupLog)
    {
        $this->requestParameters['EnableBackupLog'] = $enableBackupLog;
        $this->queryParameters['EnableBackupLog'] = $enableBackupLog;

        return $this;
    }
}
