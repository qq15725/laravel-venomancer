<?php

if (!function_exists('screenshot')) {
    /**
     * 截图
     *
     * @param string $content
     * @param bool $fullPage
     * @param bool $scroll
     * @param int $scrollDistance
     * @param int $scrollInterval
     *
     * @return string
     */
    function screenshot(string $content, bool $fullPage = true, bool $scroll = true, int $scrollDistance = 100, int $scrollInterval = 0)
    {
        return \Wxm\LaravelVenomancer\Facades\Venomancer::screenshot($content, $fullPage, $scroll, $scrollDistance, $scrollInterval);
    }
}

if (!function_exists('highchart')) {
    /**
     * Highchart 图表
     *
     * @param array $highcharts
     *
     * @return string
     */
    function highchart(array $highcharts): string
    {
        return screenshot(
            view('venomancer::highchart', compact('highcharts'))->render()
        );
    }
}