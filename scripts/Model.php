<?php

/*
 * interface Model
 * -> methods:
 *      update()
 *      store()
 * -> used for any object that will be storable in the database
 * */
interface Model
{
    public function update();
    public function store();
}