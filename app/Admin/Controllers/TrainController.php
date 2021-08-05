<?php

namespace App\Admin\Controllers;
use App\Station;
use App\Trainclass;
use App\Train;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TrainController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Train';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Train());

        $grid->column('id', __('Id'));
        $grid->column('origin', __('Origin'));
        $grid->column('destination', __('Destination'));
        $grid->column('depature_time', __('Depature time'));
        $grid->column('arrival_time', __('Arrival time'));
        $grid->column('travel_time', __('Travel time'));
        $grid->column('rail_company', __('Rail company'));
        $grid->column('train_number', __('Train number'));
        $grid->column('travel_date', __('Travel date'));
        $grid->column('ticket_class', __('Ticket class'));
        $grid->column('ticket_price', __('Price'));
        $grid->column('number_of_seats', __('Total number of seats'));
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
        $show = new Show(Train::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('origin', __('Origin'));
        $show->field('destination', __('Destination'));
        $show->field('depature_time', __('Depature time'));
        $show->field('arrival_time', __('Arrival time'));
        $show->field('travel_time', __('Travel time'));
        $show->field('rail_company', __('Rail company'));
        $show->field('train_number', __('Train number'));
        $show->field('travel_date', __('Travel date'));
        $show->field('ticket_class', __('Ticket class'));
        $show->field('ticket_price', __('Price'));
        $show->field('number_of_seats', __('Total number of seats'));
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
        $form = new Form(new Train());

        $form->select('origin', __('Origin'))->options(Station::all()->pluck('train_station','train_station'));
        $form->select('destination', __('Destination'))->options(Station::all()->pluck('train_station','train_station'));
        $form->text('depature_time', __('Depature time'));
        $form->text('arrival_time', __('Arrival time'));
        $form->text('travel_time', __('Travel time'));
        $form->text('rail_company', __('Rail company'));
        $form->text('train_number', __('Train number'));
        $form->text('travel_date', __('Travel date DD/MM/YYYY'));
        $form->select('ticket_class', __('Ticket class'))->options(Trainclass::all()->pluck('ticket_class','ticket_class'));
        $form->text('ticket_price', __('Price'));
        $form->text('number_of_seats', __('Total Number Of Seats'));

        return $form;
    }
}
