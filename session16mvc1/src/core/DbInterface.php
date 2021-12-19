<?php

namespace moham\mvc\core;

interface DbInterface
{
    public function select($table,$colomn);

    public function getAll();

    public function getRow();

    public function where($column,$compair,$value,$operation = "WHERE");

    public function andWhere($column,$compair,$value);

    public function orWhere($column,$compair,$value);

    public function insert($table,$data);

    public function update($table,$data);

    public function delete($table);

    public function orderBy($columns,$sort="ASC");

    public function orderByDesc($columns);

    public function limit($count);

    public function join($table);

    public function on($condition);

    public function excute();

    public function excuteQuery();

    public function buildInsertUpdate($data);

    public function showError();

    public function userExists($table,$data);

    public function getLastInsertedId();
}