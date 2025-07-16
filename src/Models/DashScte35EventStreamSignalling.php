<?php

namespace BitmovinApiSdk\Models;

class DashScte35EventStreamSignalling extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const XML = 'XML';

    /** @var string */
    private const XML_BIN = 'XML_BIN';

    /**
     * @param string $value
     * @return DashScte35EventStreamSignalling
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Defines how SCTE-35 events are delivered using DASH EventStream. &lt;ul&gt;   &lt;li&gt;XML: Events will contain an XML representation of a SCTE-35 cue message as a SpliceInfoSection element as defined in SCTE-35. The schemeIdUri will be \&quot;urn:scte:scte35:2013:xml.&lt;/li&gt;   &lt;li&gt;XML_BIN: Events will contain an XML representation of a SCTE-35 cue message as a Signal.Binary element as defined in SCTE-35. The schemeIdUri will be \&quot;urn:scte:scte35:2014:xml+bin&lt;/li&gt; &lt;/ul&gt;
     *
     * @return DashScte35EventStreamSignalling
     */
    public static function XML()
    {
        return new DashScte35EventStreamSignalling(self::XML);
    }

    /**
     * Defines how SCTE-35 events are delivered using DASH EventStream. &lt;ul&gt;   &lt;li&gt;XML: Events will contain an XML representation of a SCTE-35 cue message as a SpliceInfoSection element as defined in SCTE-35. The schemeIdUri will be \&quot;urn:scte:scte35:2013:xml.&lt;/li&gt;   &lt;li&gt;XML_BIN: Events will contain an XML representation of a SCTE-35 cue message as a Signal.Binary element as defined in SCTE-35. The schemeIdUri will be \&quot;urn:scte:scte35:2014:xml+bin&lt;/li&gt; &lt;/ul&gt;
     *
     * @return DashScte35EventStreamSignalling
     */
    public static function XML_BIN()
    {
        return new DashScte35EventStreamSignalling(self::XML_BIN);
    }
}

