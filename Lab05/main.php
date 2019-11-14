<html>
<head><title>Web programming</title></head>
<body>
    <?php
    class Page {
        private $page;
        private $title;
        private $year;
        private $copyright;

        function __construct($title, $year, $copyright) {
            $this->title = $title;
            $this->year = $year;
            $this->copyright = $copyright;
        }

        private function addHeader() {
            $this->page = file_get_contents("header.php");
        }

        public function addContent($content) {
            $this->addHeader();
            $this->page .= file_get_contents($content);
            $this->addFooter();
        }

        private function addFooter() {
            $this->page .= file_get_contents("footer.php");
            $this->page .= "<span>".$this->title.$this->year.$this->copyright."</span></footer>";
        }

        public function get() {
            return $this->page;
        }
    }
    ?>
</body>
</html>
