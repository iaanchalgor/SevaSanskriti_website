<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Monitoring\V3;

/**
 * Controls which fields are returned by `ListTimeSeries`.
 *
 * Protobuf enum <code>Google\Monitoring\V3\ListTimeSeriesRequest\TimeSeriesView</code>
 */
class ListTimeSeriesRequest_TimeSeriesView
{
    /**
     * Returns the identity of the metric(s), the time series,
     * and the time series data.
     *
     * Generated from protobuf enum <code>FULL = 0;</code>
     */
    const FULL = 0;
    /**
     * Returns the identity of the metric and the time series resource,
     * but not the time series data.
     *
     * Generated from protobuf enum <code>HEADERS = 1;</code>
     */
    const HEADERS = 1;
}

