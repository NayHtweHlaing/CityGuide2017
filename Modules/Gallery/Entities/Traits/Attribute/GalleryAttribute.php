<?php

namespace Modules\Gallery\Entities\Traits\Attribute;

use Modules\Category\Entities\Category;

/**
 * Class GalleryAttribute.
 */
trait GalleryAttribute
{

    /**
     * @return mixed
     */
    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.gallery.edit', $this).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getUploadButtonAttribute()
    {
        return '<a href="'.route('admin.gallery.show', $this).'" class="btn btn-xs btn-info"><i class="fa fa-upload" data-toggle="tooltip" data-placement="top" title="Upload Image"></i></a> ';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
            return '<a href="'.route('admin.gallery.destroy', $this).'"
                data-method="delete"
                data-trans-button-cancel="'.trans('buttons.general.cancel').'"
                data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
                data-trans-title="'.trans('strings.backend.general.are_you_sure').'"
                class="btn btn-xs btn-danger"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'"></i></a>';

    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return $this->getUploadButtonAttribute().$this->getEditButtonAttribute().$this->getDeleteButtonAttribute();
    }
}
