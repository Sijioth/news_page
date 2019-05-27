<?php

class Pagination {
    /**
     * @var navigation links per page
     */
    private $max = 7;

    /**
     * @var GET-key with page number
     */
    private $index = 'page';

    /**
     * @var Current page
     */
    private $current_page;

    /**
     * @var Total record amount
     */
    private $total;

    /**
     * @var Records per page
     */
    private $limit;

    /**
     * @param integer $total
     * @param integer $limit
     *
     * @return
     */
    public function __construct($total, $currentPage, $limit, $index) {
        $this->total = $total;
        $this->limit = $limit;
        $this->index = $index;
        $this->amount = $this->amount();
        $this->setCurrentPage($currentPage);
    }

    /**
     * @return HTML with navigation links
     */
    public function get() {
        $links = null;

        $limits = $this->limits();

        $html = '<ul class="pagination">';

        # Create link to previous page
        if ($this->current_page - 1 > 0) {
            $links .= $this->generateHtml($this->current_page - 1, '&#8227;&#8227;');
        } else {
            $links .= $this->generateHtml(1, '&#8227;&#8227;');
        }
        # Generate links
        for ($page = $limits[0]; $page <= $limits[1]; $page++) {

            # Add class .active if we at current page
            if ($page == $this->current_page) {
                $links .= '<li class="active"><a href="#" class="page-button" data-id="' . $page . '">' . $page . '</a></li>';
            } else {
                # Or generate link
                $links .= $this->generateHtml($page);
            }
        }

        # After links creation
        if (!is_null($links)) {
            # Create link to the first page
            $links = $this->generateHtml(1, '&#8227;&#108;') . $links;

            # Create link to the next page
            if ($this->current_page + 1 < $this->amount) {
                $links .= $this->generateHtml($this->current_page + 1, '&#8227;&#8227;');
            } else {
                $links .= $this->generateHtml($this->amount, '&#8227;&#8227;');
            }

            # Create link to the last page
            $links .= $this->generateHtml($this->amount, '&#8227;&#108;');
        }

        $html .= $links . '</ul>';

        return $html;
    }

    /**
     * HTML-link generator
     * @param integer $page
     *
     * @return
     */
    private function generateHtml($page, $text = null)
    {
        # If link text is not passed set it to page number
        if (!$text) {
            $text = $page;
        }

        $currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
        $currentURI = preg_replace('~/page-[0-9]+~', '', $currentURI);

        return '<li><a href="#" class="page-button" data-id="' . $page . '">' . $text . '</a></li>';
    }

    /**
     *  Define limits for pagination
     *
     * @return array with start-end values
     */
    private function limits() {
        # Compute links from left to make active link be in the middle
        $left = $this->current_page - round($this->max / 2);

        # Define starting value
        $start = $left > 0 ? $left : 1;

        # Check if there is at least $this->max pages ahead and define ending value
        if ($start + $this->max <= $this->amount) {
            $end = $start > 1 ? $start + $this->max : $this->max;
        } else {
            $end = $this->amount;

            # And correct starting value
            $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
        }

        return array($start, $end);
    }

    /**
     * Current page setter
     *
     * @return
     */
    private function setCurrentPage($currentPage) {
        # Get page number
        $this->current_page = $currentPage;

        # Check its value, if correct then set to it or set to 1
        if ($this->current_page > 0) {
            if ($this->current_page > $this->amount) {
                $this->current_page = $this->amount;
            }
        } else {
            $this->current_page = 1;
        }
    }

    /**
     * Compute total amount of pages
     *
     * @return pages amount
     */
    private function amount() {
        return ceil($this->total / $this->limit);
    }
}
