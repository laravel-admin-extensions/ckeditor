<?php

namespace Encore\CKEditor;

use Encore\Admin\Form\Field\Textarea;

class Editor extends Textarea
{
    protected $view = 'laravel-admin-ckeditor::editor';

    protected static $js = [
        'vendor/laravel-admin-ext/ckeditor/ckeditor4/ckeditor.js',
    ];

    public function render()
    {
        $config = (array) CKEditor::config('config');

        $this->script = <<<EOT
CKEDITOR.replace('{$this->id}');
EOT;
        return parent::render();
    }
}
