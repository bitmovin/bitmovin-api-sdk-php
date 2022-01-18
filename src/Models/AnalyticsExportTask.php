<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsExportTask extends BitmovinResponse
{
    /** @var Carbon */
    public $startTime;

    /** @var Carbon */
    public $endTime;

    /** @var string */
    public $name;

    /** @var string */
    public $description;

    /** @var string */
    public $licenseKey;

    /** @var AnalyticsExportTaskOutputTarget */
    public $output;

    /** @var int */
    public $progress;

    /** @var AnalyticsExportStatus */
    public $status;

    /** @var Carbon */
    public $startedAt;

    /** @var Carbon */
    public $finishedAt;

    /** @var AnalyticsExportType */
    public $type;

    /** @var string[] */
    public $columns;

    /** @var AnalyticsExportFileFormat */
    public $fileFormat;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->startTime = ObjectMapper::map($this->startTime, Carbon::class);
        $this->endTime = ObjectMapper::map($this->endTime, Carbon::class);
        $this->output = ObjectMapper::map($this->output, AnalyticsExportTaskOutputTarget::class);
        $this->status = ObjectMapper::map($this->status, AnalyticsExportStatus::class);
        $this->startedAt = ObjectMapper::map($this->startedAt, Carbon::class);
        $this->finishedAt = ObjectMapper::map($this->finishedAt, Carbon::class);
        $this->type = ObjectMapper::map($this->type, AnalyticsExportType::class);
        $this->fileFormat = ObjectMapper::map($this->fileFormat, AnalyticsExportFileFormat::class);
    }

    /**
     * Start of timeframe which is exported in UTC format (required)
     *
     * @param Carbon $startTime
     * @return $this
     */
    public function startTime(Carbon $startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * End of timeframe which is exported in UTC format (required)
     *
     * @param Carbon $endTime
     * @return $this
     */
    public function endTime(Carbon $endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Name of the export task (required)
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Export task description
     *
     * @param string $description
     * @return $this
     */
    public function description(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * License key (required)
     *
     * @param string $licenseKey
     * @return $this
     */
    public function licenseKey(string $licenseKey)
    {
        $this->licenseKey = $licenseKey;

        return $this;
    }

    /**
     * output
     *
     * @param AnalyticsExportTaskOutputTarget $output
     * @return $this
     */
    public function output(AnalyticsExportTaskOutputTarget $output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * type
     *
     * @param AnalyticsExportType $type
     * @return $this
     */
    public function type(AnalyticsExportType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * columns
     *
     * @param string[] $columns
     * @return $this
     */
    public function columns(array $columns)
    {
        $this->columns = $columns;

        return $this;
    }

    /**
     * File format of export file
     *
     * @param AnalyticsExportFileFormat $fileFormat
     * @return $this
     */
    public function fileFormat(AnalyticsExportFileFormat $fileFormat)
    {
        $this->fileFormat = $fileFormat;

        return $this;
    }
}

