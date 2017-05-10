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