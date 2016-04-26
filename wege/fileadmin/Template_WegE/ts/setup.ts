config.contentObjectExceptionHandler = 0

lib.mainmenu = HMENU
lib.mainmenu{
  entryLevel = 0
  1 = TMENU
  1{
    wrap = <ul class="nav navbar-nav"> | </ul>
    noBlur = 1
    NO = 1
    NO{
      wrapItemAndSub = <li> | </li>
      stdWrap.htmlSpecialChars = 1
      ATagTitle.field = title
    }
    ACT <.NO
    ACT{
      wrapItemAndSub = <li class="active"> | </li>
    }
  }
}

lib.submenu = HMENU
lib.submenu{
  entryLevel = 1
  1 = TMENU
  1{
    wrap = <ul class="nav navbar-nav"> | </ul>
    noBlur = 1
    NO = 1
    NO{
      wrapItemAndSub = <li> | </li>
      stdWrap.htmlSpecialChars = 1
      ATagTitle.field = title
    }
    ACT <.NO
    ACT{
      wrapItemAndSub = <li class="active"> | </li>
    }
  }
}

page = PAGE
page{
  includeCSS.bootstrap = fileadmin/Template_WegE/bootstrap/css/bootstrap.min.css
  includeCSS.style = fileadmin/Template_WegE/bootstrap/css/style.css
  includeJSFooter.jquery = fileadmin/Template_WegE/bootstrap/js/jquery-2.2.3.min.js
  includeJSFooter.bootstrapjs = fileadmin/Template_WegE/bootstrap/js/bootstrap.min.js

  10 = FLUIDTEMPLATE
  10{
    file = fileadmin/Template_WegE/index.html
    layoutRootPath = fileadmin/Template_WegE/layouts/
    partialRootPath = fileadmin/Template_WegE/partials/

    variables{
      siteName = TEXT
      siteName.value = WegE Fallstudie

      content < styles.content.get
    }
  }
}

plugin.tx_typo3forum {
            persistence {
                    storagePid = 26
                                    }
            settings {

                    pids {
                            Forum = 14
                    }
            }
    }
