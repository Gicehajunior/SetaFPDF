<?php

namespace setasign\tests\functional\SetaFpdf\FooterTest;

/**
 * Trait MethodTrait
 * @package setasign\tests\SetaFpdf\functional\FooterTest
 *
 * @mixin \FPDF
 */
trait MethodTrait
{
    public $footerInformation = [];

    public function footer()
    {
        $this->footerInformation[$this->PageNo()] = [
            'x' => $this->GetX(),
            'y' => $this->GetY(),
        ];
    }
}