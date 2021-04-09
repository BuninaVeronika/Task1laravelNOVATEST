<?php

namespace App\Admin\Controllers;

use App\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('id', __('Id'));
        $grid->column('header', __('Header'));
        $grid->column('text', __('Text'));
        $grid->column('img', __('Img'));
        $grid->column('sorting', __('Sorting'));
        $grid->column('day_news', __('Day news'));
        $grid->column('news_types_id', __('News types id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('header', __('Header'));
        $show->field('text', __('Text'));
        $show->field('img', __('Img'));
        $show->field('sorting', __('Sorting'));
        $show->field('day_news', __('Day news'));
        $show->field('news_types_id', __('News types id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $form->text('header', __('Header'));
        $form->textarea('text', __('Text'));
        $form->image('img', __('Img'));
        $form->number('sorting', __('Sorting'));
        $form->switch('day_news', __('Day news'));
        $form->number('news_types_id', __('News types id'))->default(1);

        return $form;
    }
}
