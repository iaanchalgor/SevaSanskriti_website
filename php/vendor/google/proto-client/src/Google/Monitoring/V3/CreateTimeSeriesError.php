<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the result of a failed request to write data to a time series.
 *
 * Generated from protobuf message <code>google.monitoring.v3.CreateTimeSeriesError</code>
 */
class CreateTimeSeriesError extends \Google\Protobuf\Internal\Message
{
    /**
     * The time series, including the `Metric`, `MonitoredResource`,
     * and `Point`s (including timestamp and value) that resulted
     * in the error. This field provides all of the context that
     * would be needed to retry the operation.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeSeries time_series = 1;</code>
     */
    private $time_series = null;
    /**
     * The status of the requested write operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     */
    private $status = null;

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct();
    }

    /**
     * The time series, including the `Metric`, `MonitoredResource`,
     * and `Point`s (including timestamp and value) that resulted
     * in the error. This field provides all of the context that
     * would be needed to retry the operation.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeSeries time_series = 1;</code>
     * @return \Google\Monitoring\V3\TimeSeries
     */
    public function getTimeSeries()
    {
        return $this->time_series;
    }

    /**
     * The time series, including the `Metric`, `MonitoredResource`,
     * and `Point`s (including timestamp and value) that resulted
     * in the error. This field provides all of the context that
     * would be needed to retry the operation.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeSeries time_series = 1;</code>
     * @param \Google\Monitoring\V3\TimeSeries $var
     * @return $this
     */
    public function setTimeSeries($var)
    {
        GPBUtil::checkMessage($var, \Google\Monitoring\V3\TimeSeries::class);
        $this->time_series = $var;

        return $this;
    }

    /**
     * The status of the requested write operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @return \Google\Rpc\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the requested write operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}

