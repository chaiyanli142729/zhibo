<?php
/**
 * Created by PhpStorm.
 * User: 无敌美少女
 * Date: 2017/7/21
 * Time: 11:05
 */
?>
@extends('home.layouts.master')

{{--@section('title', '页面标题')--}}

@section('sidebar')
    @parent

    <p>这边会附加在主要的侧边栏。</p>
@endsection

@section('content')
    <p>这是我的主要内容。</p>
@endsection
