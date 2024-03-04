<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `DeleteSnapshot` method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.DeleteSnapshotRequest</code>
 */
class DeleteSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the snapshot to delete.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 1;</code>
     */
    private $snapshot = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The name of the snapshot to delete.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 1;</code>
     * @return string
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * The name of the snapshot to delete.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot = $var;

        return $this;
    }

}

