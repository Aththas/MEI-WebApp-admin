<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A specification of a set of documents to listen to.
 *
 * Generated from protobuf message <code>google.firestore.v1.Target</code>
 */
class Target extends \Google\Protobuf\Internal\Message
{
    /**
     * The target ID that identifies the target on the stream. Must be a positive
     * number and non-zero.
     * If `target_id` is 0 (or unspecified), the server will assign an ID for this
     * target and return that in a `TargetChange::ADD` event. Once a target with
     * `target_id=0` is added, all subsequent targets must also have
     * `target_id=0`. If an `AddTarget` request with `target_id != 0` is
     * sent to the server after a target with `target_id=0` is added, the server
     * will immediately send a response with a `TargetChange::Remove` event.
     * Note that if the client sends multiple `AddTarget` requests
     * without an ID, the order of IDs returned in `TargetChage.target_ids` are
     * undefined. Therefore, clients should provide a target ID instead of relying
     * on the server to assign one.
     * If `target_id` is non-zero, there must not be an existing active target on
     * this stream with the same ID.
     *
     * Generated from protobuf field <code>int32 target_id = 5;</code>
     */
    private $target_id = 0;
    /**
     * If the target should be removed once it is current and consistent.
     *
     * Generated from protobuf field <code>bool once = 6;</code>
     */
    private $once = false;
    /**
     * The number of documents that last matched the query at the resume token or
     * read time.
     * This value is only relevant when a `resume_type` is provided. This value
     * being present and greater than zero signals that the client wants
     * `ExistenceFilter.unchanged_names` to be included in the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value expected_count = 12;</code>
     */
    private $expected_count = null;
    protected $target_type;
    protected $resume_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\V1\Target\QueryTarget $query
     *           A target specified by a query.
     *     @type \Google\Cloud\Firestore\V1\Target\DocumentsTarget $documents
     *           A target specified by a set of document names.
     *     @type string $resume_token
     *           A resume token from a prior
     *           [TargetChange][google.firestore.v1.TargetChange] for an identical target.
     *           Using a resume token with a different target is unsupported and may fail.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Start listening after a specific `read_time`.
     *           The client must know the state of matching documents at this time.
     *     @type int $target_id
     *           The target ID that identifies the target on the stream. Must be a positive
     *           number and non-zero.
     *           If `target_id` is 0 (or unspecified), the server will assign an ID for this
     *           target and return that in a `TargetChange::ADD` event. Once a target with
     *           `target_id=0` is added, all subsequent targets must also have
     *           `target_id=0`. If an `AddTarget` request with `target_id != 0` is
     *           sent to the server after a target with `target_id=0` is added, the server
     *           will immediately send a response with a `TargetChange::Remove` event.
     *           Note that if the client sends multiple `AddTarget` requests
     *           without an ID, the order of IDs returned in `TargetChage.target_ids` are
     *           undefined. Therefore, clients should provide a target ID instead of relying
     *           on the server to assign one.
     *           If `target_id` is non-zero, there must not be an existing active target on
     *           this stream with the same ID.
     *     @type bool $once
     *           If the target should be removed once it is current and consistent.
     *     @type \Google\Protobuf\Int32Value $expected_count
     *           The number of documents that last matched the query at the resume token or
     *           read time.
     *           This value is only relevant when a `resume_type` is provided. This value
     *           being present and greater than zero signals that the client wants
     *           `ExistenceFilter.unchanged_names` to be included in the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * A target specified by a query.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Target.QueryTarget query = 2;</code>
     * @return \Google\Cloud\Firestore\V1\Target\QueryTarget|null
     */
    public function getQuery()
    {
        return $this->readOneof(2);
    }

    public function hasQuery()
    {
        return $this->hasOneof(2);
    }

    /**
     * A target specified by a query.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Target.QueryTarget query = 2;</code>
     * @param \Google\Cloud\Firestore\V1\Target\QueryTarget $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\Target\QueryTarget::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A target specified by a set of document names.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Target.DocumentsTarget documents = 3;</code>
     * @return \Google\Cloud\Firestore\V1\Target\DocumentsTarget|null
     */
    public function getDocuments()
    {
        return $this->readOneof(3);
    }

    public function hasDocuments()
    {
        return $this->hasOneof(3);
    }

    /**
     * A target specified by a set of document names.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Target.DocumentsTarget documents = 3;</code>
     * @param \Google\Cloud\Firestore\V1\Target\DocumentsTarget $var
     * @return $this
     */
    public function setDocuments($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\Target\DocumentsTarget::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A resume token from a prior
     * [TargetChange][google.firestore.v1.TargetChange] for an identical target.
     * Using a resume token with a different target is unsupported and may fail.
     *
     * Generated from protobuf field <code>bytes resume_token = 4;</code>
     * @return string
     */
    public function getResumeToken()
    {
        return $this->readOneof(4);
    }

    public function hasResumeToken()
    {
        return $this->hasOneof(4);
    }

    /**
     * A resume token from a prior
     * [TargetChange][google.firestore.v1.TargetChange] for an identical target.
     * Using a resume token with a different target is unsupported and may fail.
     *
     * Generated from protobuf field <code>bytes resume_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setResumeToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Start listening after a specific `read_time`.
     * The client must know the state of matching documents at this time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->readOneof(11);
    }

    public function hasReadTime()
    {
        return $this->hasOneof(11);
    }

    /**
     * Start listening after a specific `read_time`.
     * The client must know the state of matching documents at this time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * The target ID that identifies the target on the stream. Must be a positive
     * number and non-zero.
     * If `target_id` is 0 (or unspecified), the server will assign an ID for this
     * target and return that in a `TargetChange::ADD` event. Once a target with
     * `target_id=0` is added, all subsequent targets must also have
     * `target_id=0`. If an `AddTarget` request with `target_id != 0` is
     * sent to the server after a target with `target_id=0` is added, the server
     * will immediately send a response with a `TargetChange::Remove` event.
     * Note that if the client sends multiple `AddTarget` requests
     * without an ID, the order of IDs returned in `TargetChage.target_ids` are
     * undefined. Therefore, clients should provide a target ID instead of relying
     * on the server to assign one.
     * If `target_id` is non-zero, there must not be an existing active target on
     * this stream with the same ID.
     *
     * Generated from protobuf field <code>int32 target_id = 5;</code>
     * @return int
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * The target ID that identifies the target on the stream. Must be a positive
     * number and non-zero.
     * If `target_id` is 0 (or unspecified), the server will assign an ID for this
     * target and return that in a `TargetChange::ADD` event. Once a target with
     * `target_id=0` is added, all subsequent targets must also have
     * `target_id=0`. If an `AddTarget` request with `target_id != 0` is
     * sent to the server after a target with `target_id=0` is added, the server
     * will immediately send a response with a `TargetChange::Remove` event.
     * Note that if the client sends multiple `AddTarget` requests
     * without an ID, the order of IDs returned in `TargetChage.target_ids` are
     * undefined. Therefore, clients should provide a target ID instead of relying
     * on the server to assign one.
     * If `target_id` is non-zero, there must not be an existing active target on
     * this stream with the same ID.
     *
     * Generated from protobuf field <code>int32 target_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_id = $var;

        return $this;
    }

    /**
     * If the target should be removed once it is current and consistent.
     *
     * Generated from protobuf field <code>bool once = 6;</code>
     * @return bool
     */
    public function getOnce()
    {
        return $this->once;
    }

    /**
     * If the target should be removed once it is current and consistent.
     *
     * Generated from protobuf field <code>bool once = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setOnce($var)
    {
        GPBUtil::checkBool($var);
        $this->once = $var;

        return $this;
    }

    /**
     * The number of documents that last matched the query at the resume token or
     * read time.
     * This value is only relevant when a `resume_type` is provided. This value
     * being present and greater than zero signals that the client wants
     * `ExistenceFilter.unchanged_names` to be included in the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value expected_count = 12;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getExpectedCount()
    {
        return $this->expected_count;
    }

    public function hasExpectedCount()
    {
        return isset($this->expected_count);
    }

    public function clearExpectedCount()
    {
        unset($this->expected_count);
    }

    /**
     * Returns the unboxed value from <code>getExpectedCount()</code>

     * The number of documents that last matched the query at the resume token or
     * read time.
     * This value is only relevant when a `resume_type` is provided. This value
     * being present and greater than zero signals that the client wants
     * `ExistenceFilter.unchanged_names` to be included in the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value expected_count = 12;</code>
     * @return int|null
     */
    public function getExpectedCountValue()
    {
        return $this->readWrapperValue("expected_count");
    }

    /**
     * The number of documents that last matched the query at the resume token or
     * read time.
     * This value is only relevant when a `resume_type` is provided. This value
     * being present and greater than zero signals that the client wants
     * `ExistenceFilter.unchanged_names` to be included in the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value expected_count = 12;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setExpectedCount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->expected_count = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The number of documents that last matched the query at the resume token or
     * read time.
     * This value is only relevant when a `resume_type` is provided. This value
     * being present and greater than zero signals that the client wants
     * `ExistenceFilter.unchanged_names` to be included in the response.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value expected_count = 12;</code>
     * @param int|null $var
     * @return $this
     */
    public function setExpectedCountValue($var)
    {
        $this->writeWrapperValue("expected_count", $var);
        return $this;}

    /**
     * @return string
     */
    public function getTargetType()
    {
        return $this->whichOneof("target_type");
    }

    /**
     * @return string
     */
    public function getResumeType()
    {
        return $this->whichOneof("resume_type");
    }

}

