jQuery.noConflict();

// The YAG PID is globally selected by the pid selector
var yagPid = 0;

jQuery(document).ready(function($) {
	startUp();
});


function startUp() {
	var yagPid = jQuery("#selectedPid").val();
    selectPid(yagPid);

	jQuery('li[pageuid="'+yagPid+'"]').addClass("ui-selected");
}


function addRemoveSelectionEntry(type) {
	var lcasetype = type.toLowerCase();
	jQuery("#image"+type+"Selector").prepend('<li class="ui-state-default ui-selectee" style="margin-bottom:2px;" '+lcasetype+'uid="0" id="'+lcasetype+'Unselector"></li>');
	jQuery("#"+lcasetype+"Unselector").html('<div class="ui-selectee" style="height:24px; padding-top:5px;"><a title=""><span class="t3-icon t3-icon-actions t3-icon-actions-edit t3-icon-pagetree-drag-place-denied" style="margin:2px 7px 0 2px">&nbsp;</span></a><span><div style="float:right; margin:4px 80px 0 0;">###LLL:tx_yag_flexform_noSelection###</div></span></div>');
}


jQuery(function () {
    jQuery("#pidSelector").selectable({
        selected:function (event, ui) {

            yagPid = jQuery(ui.selected).attr('pageUid');

			if (yagPid != undefined) {
				jQuery("#selectedGalleryUid").val(0);
				jQuery("#selectedAlbumUid").val(0);
				jQuery("#selectedItemUid").val(0);
				selectPid(yagPid);
			}
        }
    });
});



function selectPid(yagPid) {

	jQuery('#imageImageSelectorBox').addClass("inactiveSelectorBox").html('');
	jQuery('#imageAlbumSelectorBox').addClass("inactiveSelectorBox").html('');

	jQuery('li[pageuid="'+yagPid+'"]').addClass("ui-selected");
	jQuery("#selectedPid").val(yagPid);

    jQuery('#imageGallerySelectorBox').addClass("selectorBoxBusy").html('');

    loadGalleryList(yagPid);
}


function loadGalleryList(yagPid) {

	var	ajaxRequestGalleryID = 'ajaxID=txyagM1::getGalleryList&yagPid=' + yagPid + '&PID=###PID###';

	jQuery.ajax({
        url: 'index.php',
        data: ajaxRequestGalleryID,
        success: function(response) {
            setGalleryList(response);
        }
    });
}


function setGalleryList(data) {

    jQuery('#imageGallerySelectorBox').removeClass('inactiveSelectorBox').removeClass("selectorBoxBusy").addClass("itemSelectorBox");
	jQuery('#imageGallerySelectorBox .inactiveInfo').remove();

	jQuery('#imageGallerySelectorBox').html(data);

    jQuery('#imageGallerySelectorBox ol').attr('id', 'imageGallerySelector');
   	jQuery('#imageGallerySelector').selectable({
   	   selected: function(event, ui) {
   			jQuery("#selectedAlbumUid").val(0);
   			var galleryUid = jQuery(ui.selected).attr('galleryUid');
			if(galleryUid != undefined) {
   				selectGallery(galleryUid);
		   }
   		}
   	});

   	addRemoveSelectionEntry('Gallery');

   	var galleryUid = jQuery("#selectedGalleryUid").val();
   	selectGallery(galleryUid);
}


function selectGallery(galleryUid) {
	
	jQuery('#imageImageSelectorBox').addClass("inactiveSelectorBox").html('');
	jQuery('li[galleryuid="'+galleryUid+'"]').addClass("ui-selected");
	jQuery("#selectedGalleryUid").val(galleryUid);
	
	if(galleryUid > 0) {
		jQuery('#imageAlbumSelectorBox').addClass("selectorBoxBusy").html('');	
		loadAlbumList(galleryUid);
	} else {
		jQuery('#imageAlbumSelectorBox').addClass("inactiveSelectorBox").html('');
	}
}


function loadAlbumList(galleryUid) {
	
	var	ajaxRequestAlbumID = 'ajaxID=txyagM1::getAlbumList&yagPid=' + yagPid + '&galleryUid=' + galleryUid + '&PID=###PID###';
	
	jQuery.ajax({
        url: 'index.php',
        data: ajaxRequestAlbumID, 
        success: function(response) {
            setAlbumList(response);
        }
    });	
}


function setAlbumList(data) {
	jQuery('#imageAlbumSelectorBox').removeClass('inactiveSelectorBox').removeClass("selectorBoxBusy").addClass("itemSelectorBox");
	jQuery('#imageAlbumSelectorBox .inactiveInfo').remove();
	
	jQuery('#imageAlbumSelectorBox').html(data);
	
	jQuery('#imageAlbumSelectorBox ol').attr('id', 'imageAlbumSelector');	
	jQuery( "#imageAlbumSelector" ).selectable({
	   selected: function(event, ui) {
			jQuery("#selectedItemUid").val(0);
			var albumUid = jQuery(ui.selected).attr('albumUid');
			if(albumUid != undefined) {
				selectAlbum(albumUid);
			}
		}
	});

	addRemoveSelectionEntry('Album');
	
	var albumUid = jQuery("#selectedAlbumUid").val();
	selectAlbum(albumUid);
}


function selectAlbum(albumUid) {
	
	jQuery('#imageImageSelectorBox').addClass("inactiveSelectorBox").html('');

	jQuery("#selectedAlbumUid").val(albumUid);
	jQuery('li[albumuid="'+albumUid+'"]').addClass("ui-selected");
	
	if(albumUid > 0) {
		jQuery('#imageImageSelectorBox').addClass("selectorBoxBusy").html('');
		loadImageList(albumUid);
	}
}



function loadImageList(albumUid) {
	
	var	ajaxRequestAlbumID = 'ajaxID=txyagM1::getImageList&albumUid=' + albumUid + '&PID=###PID###';
	
	jQuery.ajax({
        url: 'index.php',
        data: ajaxRequestAlbumID, 
        success: function(response) {
            setImageList(response);
        }
    });	
}



function setImageList(data) {
	jQuery('#imageImageSelectorBox').removeClass('inactiveSelectorBox').removeClass("selectorBoxBusy").addClass("itemSelectorBox");
	jQuery('#imageImageSelectorBox .inactiveInfo').remove();
	
	jQuery('#imageImageSelectorBox').html(data);
	
	jQuery('#imageImageSelectorBox ol').attr('id', 'imageImageSelector');	
	jQuery( "#imageImageSelector" ).selectable({
		selected: function(event, ui) {
			var imageUid = jQuery(ui.selected).attr('imageUid');
			if(imageUid != undefined) {
				selectImage(imageUid);
			}
		}
	});
	
	addRemoveSelectionEntry('Image');
	
	var imageUid = jQuery("#selectedItemUid").val();
	selectImage(imageUid);
}


function selectImage(imageUid) {
	jQuery("#selectedItemUid").val(imageUid);
	jQuery('li[imageuid="'+imageUid+'"]').addClass("ui-selected");
}