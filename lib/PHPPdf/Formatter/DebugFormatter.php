<?php

/*
 * Copyright 2011 Piotr Śliwa <peter.pl7@gmail.com>
 *
 * License information is in LICENSE file
 */

namespace PHPPdf\Formatter;

use PHPPdf\Formatter\BaseFormatter,
    PHPPdf\Glyph as Glyphs,
    PHPPdf\Formatter\Chain;

/**
 * Collect debug information
 *
 * @todo implementation
 * @author Piotr Śliwa <peter.pl7@gmail.com>
 */
class DebugFormatter extends BaseFormatter
{
    public function format(Glyphs\Glyph $glyph, \PHPPdf\Document $document)
    {
        //@todo
    }
}