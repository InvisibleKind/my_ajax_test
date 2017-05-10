plugin.tx_myajaxtest {
    view {
        templateRootPaths.10 = EXT:my_ajax_test/Resources/Private/Templates/
        partialRootPaths.10 = EXT:my_ajax_test/Resources/Private/Partials/
        layoutRootPaths.10 = EXT:my_ajax_test/Resources/Private/Layouts/
    }

    settings {
        view {
            formatToPageTypeMapping {
                json = 101
            }
        }
    }
}

# Custom pageType needed to prevent output of TYPO3 comments of debug mode (although typoscript_rendering can work without custom type)
json = PAGE
json.typeNum = 101
json.config {
	xhtml_cleaning = 0
	admPanel = 0
	debug = 0
}
