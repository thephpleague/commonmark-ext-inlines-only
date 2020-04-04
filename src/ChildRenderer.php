<?php

/*
 * This file is part of the league/commonmark-ext-inlines-only package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on the CommonMark JS reference parser (http://bitly.com/commonmark-js)
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Ext\InlinesOnly;

use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Block\Renderer\BlockRendererInterface;
use League\CommonMark\ElementRendererInterface;
use League\CommonMark\Extension\InlinesOnly\ChildRenderer as CoreRenderer;

/**
 * Simply renders child elements as-is, adding newlines as needed.
 *
 * @deprecated The league/commonmark-ext-inlines-only extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class ChildRenderer implements BlockRendererInterface
{
    private $coreRenderer;

    public function __construct()
    {
        @trigger_error(sprintf('league/commonmark-ext-autolink is deprecated; use %s from league/commonmark 1.3+ instead', CoreRenderer::class), E_USER_DEPRECATED);
        $this->coreRenderer = new CoreRenderer();
    }

    /**
     * {@inheritdoc}
     */
    public function render(AbstractBlock $block, ElementRendererInterface $htmlRenderer, bool $inTightList = false)
    {
        return $this->coreRenderer->render($block, $htmlRenderer, $inTightList);
    }
}
