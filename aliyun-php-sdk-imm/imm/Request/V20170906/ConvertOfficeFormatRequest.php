<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ConvertOfficeFormat
 *
 * @method string getSrcType()
 * @method string getModelId()
 * @method string getProject()
 * @method string getMaxSheetRow()
 * @method string getMaxSheetCount()
 * @method string getEndPage()
 * @method string getTgtFileSuffix()
 * @method string getPdfVector()
 * @method string getSheetOnePage()
 * @method string getPassword()
 * @method string getStartPage()
 * @method string getMaxSheetCol()
 * @method string getTgtType()
 * @method string getFitToPagesWide()
 * @method string getHidecomments()
 * @method string getTgtFilePrefix()
 * @method string getFitToPagesTall()
 * @method string getSrcUri()
 * @method string getTgtFilePages()
 * @method string getTgtUri()
 */
class ConvertOfficeFormatRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'ConvertOfficeFormat',
            'imm'
        );
    }

    /**
     * @param string $srcType
     *
     * @return $this
     */
    public function setSrcType($srcType)
    {
        $this->requestParameters['SrcType'] = $srcType;
        $this->queryParameters['SrcType'] = $srcType;

        return $this;
    }

    /**
     * @param string $modelId
     *
     * @return $this
     */
    public function setModelId($modelId)
    {
        $this->requestParameters['ModelId'] = $modelId;
        $this->queryParameters['ModelId'] = $modelId;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $maxSheetRow
     *
     * @return $this
     */
    public function setMaxSheetRow($maxSheetRow)
    {
        $this->requestParameters['MaxSheetRow'] = $maxSheetRow;
        $this->queryParameters['MaxSheetRow'] = $maxSheetRow;

        return $this;
    }

    /**
     * @param string $maxSheetCount
     *
     * @return $this
     */
    public function setMaxSheetCount($maxSheetCount)
    {
        $this->requestParameters['MaxSheetCount'] = $maxSheetCount;
        $this->queryParameters['MaxSheetCount'] = $maxSheetCount;

        return $this;
    }

    /**
     * @param string $endPage
     *
     * @return $this
     */
    public function setEndPage($endPage)
    {
        $this->requestParameters['EndPage'] = $endPage;
        $this->queryParameters['EndPage'] = $endPage;

        return $this;
    }

    /**
     * @param string $tgtFileSuffix
     *
     * @return $this
     */
    public function setTgtFileSuffix($tgtFileSuffix)
    {
        $this->requestParameters['TgtFileSuffix'] = $tgtFileSuffix;
        $this->queryParameters['TgtFileSuffix'] = $tgtFileSuffix;

        return $this;
    }

    /**
     * @param string $pdfVector
     *
     * @return $this
     */
    public function setPdfVector($pdfVector)
    {
        $this->requestParameters['PdfVector'] = $pdfVector;
        $this->queryParameters['PdfVector'] = $pdfVector;

        return $this;
    }

    /**
     * @param string $sheetOnePage
     *
     * @return $this
     */
    public function setSheetOnePage($sheetOnePage)
    {
        $this->requestParameters['SheetOnePage'] = $sheetOnePage;
        $this->queryParameters['SheetOnePage'] = $sheetOnePage;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

        return $this;
    }

    /**
     * @param string $startPage
     *
     * @return $this
     */
    public function setStartPage($startPage)
    {
        $this->requestParameters['StartPage'] = $startPage;
        $this->queryParameters['StartPage'] = $startPage;

        return $this;
    }

    /**
     * @param string $maxSheetCol
     *
     * @return $this
     */
    public function setMaxSheetCol($maxSheetCol)
    {
        $this->requestParameters['MaxSheetCol'] = $maxSheetCol;
        $this->queryParameters['MaxSheetCol'] = $maxSheetCol;

        return $this;
    }

    /**
     * @param string $tgtType
     *
     * @return $this
     */
    public function setTgtType($tgtType)
    {
        $this->requestParameters['TgtType'] = $tgtType;
        $this->queryParameters['TgtType'] = $tgtType;

        return $this;
    }

    /**
     * @param string $fitToPagesWide
     *
     * @return $this
     */
    public function setFitToPagesWide($fitToPagesWide)
    {
        $this->requestParameters['FitToPagesWide'] = $fitToPagesWide;
        $this->queryParameters['FitToPagesWide'] = $fitToPagesWide;

        return $this;
    }

    /**
     * @param string $hidecomments
     *
     * @return $this
     */
    public function setHidecomments($hidecomments)
    {
        $this->requestParameters['Hidecomments'] = $hidecomments;
        $this->queryParameters['Hidecomments'] = $hidecomments;

        return $this;
    }

    /**
     * @param string $tgtFilePrefix
     *
     * @return $this
     */
    public function setTgtFilePrefix($tgtFilePrefix)
    {
        $this->requestParameters['TgtFilePrefix'] = $tgtFilePrefix;
        $this->queryParameters['TgtFilePrefix'] = $tgtFilePrefix;

        return $this;
    }

    /**
     * @param string $fitToPagesTall
     *
     * @return $this
     */
    public function setFitToPagesTall($fitToPagesTall)
    {
        $this->requestParameters['FitToPagesTall'] = $fitToPagesTall;
        $this->queryParameters['FitToPagesTall'] = $fitToPagesTall;

        return $this;
    }

    /**
     * @param string $srcUri
     *
     * @return $this
     */
    public function setSrcUri($srcUri)
    {
        $this->requestParameters['SrcUri'] = $srcUri;
        $this->queryParameters['SrcUri'] = $srcUri;

        return $this;
    }

    /**
     * @param string $tgtFilePages
     *
     * @return $this
     */
    public function setTgtFilePages($tgtFilePages)
    {
        $this->requestParameters['TgtFilePages'] = $tgtFilePages;
        $this->queryParameters['TgtFilePages'] = $tgtFilePages;

        return $this;
    }

    /**
     * @param string $tgtUri
     *
     * @return $this
     */
    public function setTgtUri($tgtUri)
    {
        $this->requestParameters['TgtUri'] = $tgtUri;
        $this->queryParameters['TgtUri'] = $tgtUri;

        return $this;
    }
}
