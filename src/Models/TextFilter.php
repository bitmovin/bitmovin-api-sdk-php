<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TextFilter extends Filter
{
    /** @var \BitmovinApiSdk\Models\TextFilterFont */
    public $font;

    /** @var bool */
    public $box;

    /** @var int */
    public $boxBorderWidth;

    /** @var string */
    public $boxColor;

    /** @var int */
    public $lineSpacing;

    /** @var int */
    public $borderWidth;

    /** @var bool */
    public $fixBounds;

    /** @var string */
    public $fontColor;

    /** @var int */
    public $fontSize;

    /** @var string */
    public $fontSizeExpression;

    /** @var int */
    public $alpha;

    /** @var string */
    public $shadowColor;

    /** @var int */
    public $shadowX;

    /** @var int */
    public $shadowY;

    /** @var string */
    public $timecode;

    /** @var string */
    public $text;

    /** @var string */
    public $x;

    /** @var string */
    public $y;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->font = ObjectMapper::map($this->font, TextFilterFont::class);
    }

    /**
     * font
     *
     * @param \BitmovinApiSdk\Models\TextFilterFont $font
     * @return $this
     */
    public function font(\BitmovinApiSdk\Models\TextFilterFont $font)
    {
        $this->font = $font;

        return $this;
    }

    /**
     * If set to true a box is drawn around the text using the background color.
     *
     * @param bool $box
     * @return $this
     */
    public function box(bool $box)
    {
        $this->box = $box;

        return $this;
    }

    /**
     * The width of the box drawn around the text.
     *
     * @param int $boxBorderWidth
     * @return $this
     */
    public function boxBorderWidth(int $boxBorderWidth)
    {
        $this->boxBorderWidth = $boxBorderWidth;

        return $this;
    }

    /**
     * The background color to be used for drawing the box.
     *
     * @param string $boxColor
     * @return $this
     */
    public function boxColor(string $boxColor)
    {
        $this->boxColor = $boxColor;

        return $this;
    }

    /**
     * Line spacing of the border around the box in pixels
     *
     * @param int $lineSpacing
     * @return $this
     */
    public function lineSpacing(int $lineSpacing)
    {
        $this->lineSpacing = $lineSpacing;

        return $this;
    }

    /**
     * Width of the border around the text
     *
     * @param int $borderWidth
     * @return $this
     */
    public function borderWidth(int $borderWidth)
    {
        $this->borderWidth = $borderWidth;

        return $this;
    }

    /**
     * If set to true, it will fix text coordinates to avoid clipping if necessary
     *
     * @param bool $fixBounds
     * @return $this
     */
    public function fixBounds(bool $fixBounds)
    {
        $this->fixBounds = $fixBounds;

        return $this;
    }

    /**
     * The color to be used to draw the text
     *
     * @param string $fontColor
     * @return $this
     */
    public function fontColor(string $fontColor)
    {
        $this->fontColor = $fontColor;

        return $this;
    }

    /**
     * Font size to be used to draw the text
     *
     * @param int $fontSize
     * @return $this
     */
    public function fontSize(int $fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * An expression for the Font size. Either fontSize or fontSizeExpression can be set at the same time. The following variables are valid: main_h, h, H for input height and main_w, w, W for the input_width
     *
     * @param string $fontSizeExpression
     * @return $this
     */
    public function fontSizeExpression(string $fontSizeExpression)
    {
        $this->fontSizeExpression = $fontSizeExpression;

        return $this;
    }

    /**
     * If set, alpha blending for the text is applied. Values are valid between 0.0 and 1.0.
     *
     * @param int $alpha
     * @return $this
     */
    public function alpha(int $alpha)
    {
        $this->alpha = $alpha;

        return $this;
    }

    /**
     * Color of the shadow
     *
     * @param string $shadowColor
     * @return $this
     */
    public function shadowColor(string $shadowColor)
    {
        $this->shadowColor = $shadowColor;

        return $this;
    }

    /**
     * X offset of the shadow
     *
     * @param int $shadowX
     * @return $this
     */
    public function shadowX(int $shadowX)
    {
        $this->shadowX = $shadowX;

        return $this;
    }

    /**
     * Y offset of the shadow
     *
     * @param int $shadowY
     * @return $this
     */
    public function shadowY(int $shadowY)
    {
        $this->shadowY = $shadowY;

        return $this;
    }

    /**
     * If set, the timecode representation in \&quot;hh:mm:ss[:;.]ff\&quot; format will be applied
     *
     * @param string $timecode
     * @return $this
     */
    public function timecode(string $timecode)
    {
        $this->timecode = $timecode;

        return $this;
    }

    /**
     * String to be drawn
     *
     * @param string $text
     * @return $this
     */
    public function text(string $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * X position of the text. Also an expression can be used. The following variables are valid: line_h - height of each text line; main_h - input height; main_w - input width; n - number of input frame; text_h - Text height; text_w - Text width (required)
     *
     * @param string $x
     * @return $this
     */
    public function x(string $x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Y position of the text. Also an expression can be used. The following variables are valid: line_h - height of each text line; main_h - input height; main_w - input width; n - number of input frame; text_h - Text height; text_w - Text width (required)
     *
     * @param string $y
     * @return $this
     */
    public function y(string $y)
    {
        $this->y = $y;

        return $this;
    }
}

