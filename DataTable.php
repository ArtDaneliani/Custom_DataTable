<?php echo $header; ?>
<link href="/static/css/bootstrap-multiselect.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/static/css/parts2.css">
<link rel="stylesheet" href="/static/css/jquery.dataTables.min.css">
<style id="currencies-style">
    <?php foreach ($CC as $V) : ?>
    .cs-<?php echo ($V->code); ?>::after { content: "<?php echo ($V->symbol_right); ?>"; }
    <?php endforeach; ?>
    .b-brand {
        padding: 10px 0px;
        display: flex;
        flex-direction: row;
        width: 100%;
    }
    .b-brand > button {
        margin: 0 20px;
        height: 40px;
    }

    /*новый мультиселект*/
    .center-block {
        padding: 0px;
    }
    #brands_selector {
        padding-right: 10px !important;
    }
    #brands_selector .multiselect-container.dropdown-menu {
        max-height: 383px;
    }
    #brands_selector .btn-group.open {
        width: 100%;
        border-bottom: 1px solid #b2b2b2;
        padding-bottom: 9px;
    }
    #brands_selector .checkList a {
        width: unset;
        min-width: unset;
        max-width: unset;
    }
    #brands_selector input[type="radio"], input[type="checkbox"] {
        margin: 3px 0px 0px;
    }
    #brands_selector .aweCheckbox label::before {
        top: 4px;
        left: 15px;
    }
    #brands_selector .aweCheckbox {
        padding-left: 1px;
        position: relative;
    }
    #brands_selector .multiselect-container.dropdown-menu {
        position: relative;
        box-shadow: none;
        border: none;
        z-index: unset;
    }
    #brands_selector .aweCheckbox label {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
        width: 144px;
        padding: 0px 10px;
        position: unset;
        display: block;
        color: #036;
        font-weight: 400;
    }
    #brands_selector .aweCheckbox label.disabled {
        color: rgba(0, 51, 102, 0.49) !important;
    }
    .dropdown-menu > li > a:hover,
    .dropdown-menu > li > a:focus {
        background-color: #ffffff !important;
    }
    #brands_selector .dropdown-menu > li > a:hover label.disabled {
        color: rgba(0, 51, 102, 0.49); !important;
    }
    #brands_selector .aweCheckbox label::before {
        width: 15px;
        height: 15px;
    }
    #brands_selector .aweCheckbox label::after {
        left: 14px;
        top: 4px;
    }
    #brands_selector .dropdown-menu > li > a:hover,
    #brands_selector .dropdown-menu > li > a:hover label,
    #brands_selector .dropdown-menu > .active > a:hover{
        font-weight: bold;
        background-color: #fff;
        color: #002852;
    }
    #brands_selector .dropdown-menu > .active > a,
    #brands_selector .dropdown-menu > .active .checkbox,
    #brands_selector .dropdown-menu > .active > a:hover,
    #brands_selector .dropdown-menu > .active > a:focus {
        color: #5e5e5e;
        font-weight: bold;
        color: #036;
        background-color: #fff;
    }
    #brands_selector .brand-item {
        position: relative;
    }
    #brands_selector .brand-item > i {
        right: 0;
        top: 4px;
        position: absolute;
        color: #036;
    }
    .aweCheckbox input[type="checkbox"]:focus + label::before,
    input[type="file"]:focus,
    input[type="radio"]:focus,
    input[type="checkbox"]:focus {
        outline: thin !important;
    }




    .tooltip-inner {
        background: #123262 !important;
        border-color: #123262 !important;
        min-width:220px;
        z-index: 1111 !important;
        opacity: 1 !important;
    }
    .tooltip-arrow {
        border-top-color: #123262 !important;
    }
    .multiselect.dropdown-toggle.btn.btn-default {
        background: #fff;
        box-shadow: none;
        border-color: #d2d6de;
        position: relative;
        text-align: left;
        border-radius: 5px;
        width: 100%;
    }
    .multiselect.dropdown-toggle.btn.btn-default:hover {
        color: inherit;
    }
    .multiselect.dropdown-toggle.btn.btn-default {
        text-align: left;
    }
    .multiselect.dropdown-toggle.btn.btn-default > .caret {
        box-sizing: border-box;
        position: absolute;
        display: inline-flex;
        transform: scale(var(--ggs,1));
        width: 10px;
        height: 10px;
        border: 2px solid #103f6f00;
        border-radius: 100px;
        right: 10px;
        top: 29%;
    }
    .multiselect.dropdown-toggle.btn.btn-default > .caret::after {
        content: "";
        display: block;
        box-sizing: border-box;
        position: absolute;
        right: 10px;
        top: 41%;
        width: 6px;
        height: 6px;
        border-bottom: 1px solid #011120;
        border-right: 1px solid #011120;
        transform: rotate(45deg);
    }
    .btn-group.open > .multiselect.dropdown-toggle.btn.btn-default {
        box-shadow: none;
        background: #ffffff;
    }
    .multiselect-container.dropdown-menu {
        width: 100%;
        max-height: 346px;
        overflow-y: auto;
    }
    #brand_list {
        width: 30%;
    }
    #brand_list .btn-group {
        width: 100%;
    }
    .aweCheckbox-danger input[type="checkbox"]:checked + label::before {
        background-color: #fff;
        border-color: #ccc;
    }
    .dropdown-menu > .active > a,
    .dropdown-menu > .active  .checkbox,
    .dropdown-menu > .active > a:hover,
    .dropdown-menu > .active > a:focus {
        /*color: #5e5e5e;*/
        font-weight: bold;
        color: #036;
        background-color: #ffffff;
    }
    .aweCheckbox {
        padding-left: 2px;
    }
    .aweCheckbox  {
        display: inline-flex;
        align-items: center;
        font-size: 16px;
        width: 100%;
    }
    .aweCheckbox label {
        width: 100%;
        margin: 2px 0px;
        height: 20px;
        /*font-size: 13px;*/
        padding-left: 8px;
    }
    .aweCheckbox label.checkbox > i {
        font-size: 13px;
        cursor: pointer;
        float: right;
        top: 4px;
        position: relative;
        right: 10px;
        width: auto;
    }
    .aweCheckbox label::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 17px;
        height: 17px;
        top: 4px;
        left: 0;
        margin-left: -15px;
        border: 1px solid #cccccc;
        border-radius: 3px;
        background-color: #fff;
        -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
    }
    .aweCheckbox label::after {
        display: flex;
        position: absolute;
        width: 17px;
        height: 17px;
        left: 0;
        top: 3px;
        margin-left: -15px;
        font-size: 11px;
        color: #555555;
        justify-content: center;
    }
    .aweCheckbox input[type="checkbox"] {
        opacity: 0;
        z-index: 1;
    }
    .aweCheckbox input[type="checkbox"]:focus + label::before {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
    }
    .aweCheckbox input[type="checkbox"]:checked + label::after {
        font-family: "FontAwesome";
        content: "\f00c";
    }
    .aweCheckbox input[type="checkbox"]:indeterminate + label::after {
        display: block;
        content: "";
        width: 10px;
        height: 3px;
        background-color: #555555;
        border-radius: 2px;
        margin-left: -16.5px;
        margin-top: 7px;
    }
    .aweCheckbox input[type="checkbox"]:disabled + label {
        opacity: 0.65;
    }
    .aweCheckbox input[type="checkbox"]:disabled + label::before {
        background-color: #eeeeee;
        cursor: not-allowed;
    }
    .aweCheckbox.aweCheckbox-circle label::before {
        border-radius: 50%;
    }
    .aweCheckbox.aweCheckbox-inline {
        margin-top: 0;
    }
    .aweCheckbox-danger input[type="checkbox"]:checked + label::after {
        color: #036;
    }
    .brand-item  > a:hover {

    }
    .aweCheckbox-danger input[type="checkbox"]:indeterminate + label::after {
        background-color: #fff;
    }
    input[type="checkbox"].styled:checked + label:after {
        font-family: 'FontAwesome';
        content: "\f00c";
    }
    input[type="checkbox"] .styled:checked + label::before {
        color: #fff;
    }
    input[type="checkbox"] .styled:checked + label::after {
        color: #fff;
    }
    .qty {
        border: 1px solid #d2d6de !important;
        font-size: 0;
        width: 60px;
    }
    .qty input {
        width: 58px;
        font-size: 14px;
        border: none;
    }

    .dataTables_wrapper {
        border-bottom: 1px solid #b2b2b2;
        padding-bottom: 7px;
    }

    #dataTables-example_paginate,
    #dataTables-example_length {
        width: 30%;
        margin-top: 10px;
        height: 34px;
    }
    #dataTables-example_paginate {
        margin-top: 2px;
        width: 60%;
    }
    #dataTables-example_paginate span a {
        height: 31px;
        padding: 2px 5px;
        width: auto;
        background: #ffffff;
        border-radius: 4px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    #dataTables-example_paginate span a:hover {
        height: 31px;
        padding: 2px 5px;
        width: auto;
        color: #ffffff !important;
        background: #123262;
        border-radius: 4px;
    }
    .paginate_button.previous.disabled,
    .paginate_button.next.disabled {
        color: #123262 !important;
        background: #ffffff !important;
        font-weight: normal !important;
    }
    .paginate_button.previous.disabled:hover,
    .paginate_button.next.disabled:hover {
        color: #123262 !important;
        background: #ffffff !important;
        font-weight: normal !important;
    }
    .paginate_button.previous:hover,
    .paginate_button.next:hover {
        color: #ffffff !important;
        background: #123262 !important;
        font-weight: normal !important;
        border-radius: 4px !important;
    }
    #dataTables-example_paginate  a {
        height: 37px;
        padding: 5px;
    }
    #dataTables-example_filter {
        display: flex;
        width: 100%;
        flex-direction: row;
        justify-content: space-between;
    }
    #dataTables-example_filter label > input {
        border-color: #d2d6de;
    }

    #dataTables-example > thead,
    #brand_list {
        display: none;
    }
    #dataTables-example_wrapper table.no-footer.dataTable tbody > tr > td {
        font-size: 14px;
        text-align: center;
    }
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th {
        text-align: center;
        padding: 10px 5px;
    }
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(2),
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(3),
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(4),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(2),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(3),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(4) {
        text-align: left;
    }
    .brand-name {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
        width: 100px;
    }
    .product-article{
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
    }
    .product-name {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
        width: 300px;
    }
    .distributor-info {
        font-size: 90%;
    }
    .product-price {
        font-size: 14px;
        background-color: rgba(40, 160, 80, 0.1);
        height: 39px;
        display: inline-flex;
        width: 100%;
        padding: 3px;
    }
    .product-stock{
        width: 70px;
        font-size: 14px;
        text-align: right;
    }
    .product-article {
        font-size: 14px;
        width: 100px;
    }
    .product-distributor {
        font-size: 13px;
        min-width: 120px;
        height: 100%;
        display: inline-flex;
        align-items: center;
        justify-content: end;
        position: relative;
        /*line-height: 270%;*/
    }
    .product-distributor > .info_button {
        margin-left: 10px;
        margin-right: auto;
        /*position: absolute;*/
        /*left: 0;*/
    }
    .product-article > i {
        font-size: 12px;
    }
    .product-distributor > .fa.fa-star {
        margin-right: 3px;
        position: relative;
        top: 1px;
    }
    .product-distributor span {
        font-size: 13px;
        position: relative;
        top: 2px;
    }
    .product-dtime,
    .product-percent {
        width: 40px;
        font-size: 14px;
        justify-content: end;
    }
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(8),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(8) {
        max-width: 7%;
        min-width: 7%;
        width: 7%;
    }
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:first-child,
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:first-child {
        max-width: 1%;
        min-width: 1%;
        width: 1%;
        padding: 0px 3px !important;
    }
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(9),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(9),
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(2),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(2) {
        max-width: 10%;
        min-width: 10%;
        width: 10%;
    }
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(9) {
        padding-right: 0 !important;
    }
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(5),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(5),
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(3),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(3){
        max-width: 10%;
        min-width: 10%;
        width: 10%;
        height: 100%;
    }
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(4),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(4) {
        max-width: 24%;
        min-width: 24%;
        width: 24%;
    }
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(6),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(6){
        max-width: 6%;
        min-width: 6%;
        width: 6%;
    }
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(7),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(7),
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(10),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(10),
    #dataTables-example_wrapper table.no-footer.dataTable > thead > tr > th:nth-child(11),
    #dataTables-example_wrapper table.no-footer.dataTable > tbody > tr > td:nth-child(11) {
        max-width: 5%;
        min-width: 5%;
        width: 5%;
    }
    #dataTables-example_wrapper table.no-footer.dataTable thead > tr > th:first-child,
    #dataTables-example_wrapper table.no-footer.dataTable tbody > tr > td:first-child {
        /*width: 30px;*/
        text-align: center;
        vertical-align: middle;
    }
    #dataTables-example_wrapper table.dataTable tbody th,#dataTables-example_wrapper table.dataTable tbody td {
        padding: 0px 5px !important;
    }
    #dataTables-example_wrapper table.dataTable tbody > tr > td:nth-child(5) {
        /*background-color: rgba(40, 160, 80, 0.1);*/
    }
    #dataTables-example_wrapper table.dataTable tbody .odd {
        background-color: #fafbfc;
    }
    #dataTables-example_wrapper table.dataTable tbody tr {
        height: 41px;
    }
    .filter select {
        font-size: 16px;
        width: 100%;
        background: #fff;
        border: 1px solid #d2d6de !important;
        border-radius: 5px;
        position: relative;
        height: 40px;
        margin-bottom: 20px;
    }
    #spin_search {
        left: 47%;
        font-size: 7em;
        position: fixed;
        top: 30%;
        z-index: 999;
    }
    #brands_selector > form > button {
        margin: 20px auto;
        width: 86px;
        display: block;
    }
    #table_wrapper > button {
        margin: 20px 0 13px auto;
        width: 245px;
        display: block;
    }

    /*radio buttons group*/
    .radio {
        margin: 0 0 0.5rem 0;
    }
    .radio input[type=radio] {
        position: absolute;
        opacity: 0;
    }
    .radio label, .checkbox label {
        padding-left: 0px;
        font-size: 15px;
    }
    .radio input[type=radio] + .radio-label:before {
        content: "";
        background: #fff;
        border-radius: 100%;
        border: 1px solid #c0c6d0;
        display: inline-block;
        width: 17px;
        height: 17px;
        position: relative;
        top: -1px;
        margin-right: 10px;
        vertical-align: middle;
        cursor: pointer;
        text-align: center;
        transition: all 250ms ease;
    }
    .radio input[type=radio]:checked + .radio-label:before {
        background-color: #123262b2;
        box-shadow: inset 0 0 0 3px #fff;
        border-color: #123262b2;
    }
    .radio input[type=radio]:checked ~ .radio-label {
        font-weight: 400;
    }
    .radio input[type=radio]:focus + .radio-label:before {
        outline: none;
        border-color: #123262;
    }
    .radio input[type=radio]:disabled + .radio-label:before {
        box-shadow: inset 0 0 0 2px #fff;
        border-color: #d2d6de;
        background: #fff;
    }
    .radio input[type=radio] + .radio-label:empty:before {
        margin-right: 0;
    }
    .tabSort {
        display: inline-flex !important;
        width: 100%;
        justify-content: space-between;
        margin: 0px 0px 5px;
        padding: 0px;
        border-bottom: 1px solid #e5e5e5;
    }
    .tabSort li {
        font-size: 13px;
        cursor: pointer;
        line-height: 100%;
        position: relative;
        top: 1px;
        padding: 0px 0px 2px 0px;
    }
    .tabSort > li:hover {
        font-weight: bold;
        top: 1px;
    }
    .tabSort > li.active {
        border-bottom: 2px solid;
        font-weight: bold;
        top: 1px;
        padding: 0px;
    }
</style>
<script src="/static/js/lib/js.cookie.min.js"></script>
<div id="info-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" id="info-content"></div>
    </div>
</div>
<div id="content">
    <h1 class="h2"><?= $h1; ?></h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="b-filter"></div>
    </div>

    <!--========================   селектор Аналоги   ====================================-->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 b-brand">
        <div  class="control-group brand-list" id="brand_list">
            <select id="analogs"  size="5" name="analogs[]" class="form-control"  multiple="multiple"></select>
        </div>
    </div>
    <!--==================================================================================-->
    <br>

    <!--============================ Sidebar =============================================-->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" id="brands_selector">
            <form method="post" id="sidebar_form" action="">
                <h4 style="margin: 0px 0px 5px;font-weight: 600;font-size: 17px;">Поиск</h4>
                <div id="data_filter" class="filter">
                    <div class="options" id="main_filter">
                        <div class="radio">
                            <input id="articles1" type="radio" name="main-filter" value="articles" checked/>
                            <label class="radio-label" for="articles1">По артикулу</label>
                        </div>
                        <div class="radio">
                            <input id="analogs1" type="radio" name="main-filter" value="analogs" />
                            <label class="radio-label" for="analogs1">По аналогу</label>
                        </div>
                        <div class="radio">
                            <input id="brands1" type="radio" name="main-filter" value="brands" />
                            <label class="radio-label" for="brands1">По бренду</label>
                        </div>
                        <div class="radio">
                            <input id="all1" type="radio" name="main-filter" value="all" />
                            <label class="radio-label" for="all1">По всем</label>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 style="margin: 0px 0px 5px;font-weight: 600;font-size: 17px;">Предпочтения</h4>
                <div id="" class="filter">
                    <div class="options" id="filter-by-group">
                        <div class="radio">
                            <input id="price1" type="radio" name="filter-by-group" value="price" checked/>
                            <label class="radio-label" for="price1">Лучшая цена</label>
                        </div>
                        <div class="radio">
                            <input id="delivery1" type="radio" name="filter-by-group" value="deliverytime_min" />
                            <label class="radio-label" for="delivery1">Быстрая доставка</label>
                        </div>
                        <div class="radio">
                            <input id="percent1" type="radio" name="filter-by-group" value="percent" />
                            <label class="radio-label" for="percent1">Вероятность поставки</label>
                        </div>
                        <div class="radio">
                            <input id="stock1" type="radio" name="filter-by-group" value="stock" />
                            <label class="radio-label" for="stock1">Наличие на складе</label>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 style="margin: 0px 0px 0px;font-weight: 600;font-size: 17px;">Бренд</h4>
                <div class="s-wrap">
                    <ul class="tabSort">
                        <li class="sortName" value="abc">по алфавиту</li>
                        <li class="sortPrice" value="price">по цене</li>
                        <li class="sortDays" value="deliverytime_min">по дням</li>
                    </ul>
                </div>
                <select id="brands"  size="5" name="brands[]" class="form-control"  multiple="multiple"></select>

                <button id="filter_products" type="submit" class="search-btn hd_src_btn">Найти</button>
            </form>
        </div>

        <!--============================ Таблица =============================================-->
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 table-responsive-xl responsive" id="table_wrapper">
            <table id="dataTables-example">
                <thead>
                <tr>
                    <th class="no-sort"></th>
                    <th>Бренд</th>
                    <th>Артикул</th>
                    <th>Наименование</th>
                    <th><img style="width: 13px; height: 16px; position: relative; bottom: 2px;" src="/static/icon/byn.png" data-container="#content" title="Цена"></th>
                    <th><i  class="fa fa-truck" data-container="#content" title="Срок поставки (дн)"></i></th>
                    <th><i  class="fa fa-percent" data-container="#content" title="Вероятность поставки"></i></th>
                    <th><i  class="fa fa-archive" data-container="#content" title="Наличие на складе (шт)"></i></th>
                    <th><span data-container="#content" title="Аббревиатура склада"><b>Склад</b></span></th>
                    <th class="no-sort"></th>
                    <th class="no-sort"><i  class="fa fa-shopping-cart tocart" data-container="#content" title="Добавить в корзину" rel="tooltip"></i></th>
                </tr>
                </thead>
            </table>
            <button onclick="getAllProducts()" class="search-btn hd_src_btn">Показать все предложения</button>
            <span class="article-notification">* Для копирования артикула сделайте двойной клик по артикулу и сохраните (Ctrl + C)</span>
        </div>
    </div>

</div>
<?php echo $footer; ?>
<script src="/static/js/lib/bootstrap-multiselect.min.js"></script>
<script src="/static/js/lib/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/js/runtime/addToGuestCart.js"></script>
<script type="text/javascript" src="/static/js/runtime/parts2.js"></script>
<script>
    var stateSpan = 1;
    $(document).ready(function() {
        const showBrands = $('#brands');
        const brands = <?php echo $brands ?? '[]'; ?>;
        const products = <?php echo $json; ?>;
        const brandsSearch = <?php echo $brands_search; ?>;
        initMultiselect(showBrands, brandsSearch, true);
        initTable(products, brands);
        // проверяем ширину экрана
        if ($(window).width() < '1000'){
            $('#brands_selector .btn-group > .dropdown-backdrop').remove();
        }
        $("[rel=tooltip]").tooltip({
            placement: 'top'
        });
        //сортировка в брендах (алфавит.цена.доставка)
        const tabs = document.querySelectorAll('.tabSort>li');
        tabs.forEach((tab) => {
            tab.addEventListener('click', (e) => {
                const otherTabs = document.querySelectorAll(".tabSort>li.active");
                otherTabs.forEach((otherTab) => {otherTab.classList.remove('active')});
                tab.classList.add('active');
                const sortBy = $(".tabSort>li.active").attr('value');
                if(sortBy == 'deliverytime_min') {
                    const days = Object.values(brandsSearch).sort((a, b) => (a.dtime - b.dtime));
                    stateSpan = 0;
                    initMultiselect($('#brands'), days, true)
                } else if (sortBy == 'price') {
                    const pr = Object.values(brandsSearch).sort((a, b) => (a.price - b.price));
                    stateSpan = 1;
                    initMultiselect($('#brands'), pr, true)
                } else {
                    const abc = Object.values(brandsSearch).sort((a, b) => (a.name > b.name)? 1 : -1);
                    initMultiselect($('#brands'), abc, true)
                }
            })
        })
    });

    function  changeState() {
        if(stateSpan) {
            $('.prices').show()
            $('.days').hide()
        } else {
            $('.prices').hide()
            $('.days').show()
        }
    }

    function restyleBrands (){
        //разворачиваем бренды в мультиселекте и снимаем событие с кнопки сворачивания
        $('#brands_selector .btn-group > button').remove()
        $('#brands_selector').find('ul').attr('style', 'display:block;');
        $('#brands_selector').find('.btn-group').addClass('open');
        changeState()
    }

    function initTable(products, brands){
        const analogs = $('#analogs');
        initMultiselect(analogs, brands)
        const selectorBrands = $('#brand_list');
        const table = $('#dataTables-example');
        table.DataTable().clear().draw();
        $('#dataTables-example tbody').find('tr').remove();
        $('#dataTables-example > thead').show();
        $('#dataTables-example_info').remove();
        table.DataTable({
            destroy: true,
            info: false,
            bInfo: false,
            autoWidth: false,
            responsive: true,
            sort: true,
            "aLengthMenu": [[15, 25, 50, 100], [15, 25, 50, 100]],
            "iDisplayLength": 15,
            language: {
                "paginate": {
                    "next":       "Вперед",
                    "previous":   "Назад"
                },
                "lengthMenu":     "Показать _MENU_ предложений",
                "loadingRecords": "Загрузка данных...",
                "emptyTable":     "Нет данных для отображения",
                "zeroRecords":    "Не найдено",
                "search": "_INPUT_",
                "searchPlaceholder": "Поиск..."
            },
            dom: '<"modal-search"f>rt<"bottom"lp><"clear">',
            scrollY: true,
            scrollX: true,
            fixedColumns: false,
            data: products,
            dataSrc: '',
            columns: [
                {
                    render: function (data, type, row, meta) {
                        return ''
                    }
                },
                {
                    render: function (data, type, row, meta) {
                        return `<div class="brand-name" data-container="#content" data-html="true" title="${row.brand}" rel="tooltip-name">${row.brand}</div>`
                    }
                },
                {
                    render: function (data, type, row, meta) {
                        return `<div class="product-article" data-container="#content" data-html="true" title="${row.article}" rel="tooltip">${row.article}</div>`
                    }
                },
                {
                    render: function (data, type, row, meta) {
                        return `<div class="product-name" data-container="#content" data-html="true" title="${row.name}" rel="tooltip">${row.name}</div>`
                    }
                },
                {
                    render: function (data, type, row, meta) {
                        if(type == 'display') {
                            if ($('#show_initial_price').is(':checked')) {
                                return `<div class="product-price" style="flex-direction: column; align-items: end;">${row.price}руб<span style="font-size: 12px;font-weight: bold">${row.price_original}</span></div>`
                            } else {
                                return `<div class="product-price" style="justify-content: end;align-items: center;">${row.price}руб</div>`
                            }
                        }
                        else
                            return row.price;
                    }
                },
                {
                    render: function (data, type, row, meta) {
                        if(type == 'display')
                            return `<div class="product-dtime">${parseInt(row.dtime)}дн</div>`
                        else
                            return row.dtime;
                    }
                },
                {
                    render: function (data, type, row, meta) {
                        return `<div class="product-percent">${row.percent} %</div>`
                    }
                },
                {
                    render: function (data, type, row, meta) {
                        if(type == 'display')
                            return `<div class="product-stock">${row.stock}шт</div>`
                        else
                            return row.stock;
                    }
                },
                {
                    render: function (data, type, row, meta) {
                        const star = (row.info.supplier_type == 'OD') ? `<i class="fa fa-star" style="color:orange;"  data-container="#content" title="Официальный дилер" rel="tooltip"></i> ` :
                            (row.info.supplier_type == 'CS') ? `<i class="fa fa-star" style="color:green;" data-container="#content" title="Официальный дилер" rel="tooltip"></i> ` :
                                '';
                        if ($('#show_initial_warehouse').is(':checked')) {
                            const waredefine = ((typeof row.waredefine !== "undefined" && row.waredefine !== null)) ? `<br>${row.waredefine}` : ''
                            return `<div class="product-distributor distributor-name" data-container="#content" data-html="true" title="${row.distributor_name}${waredefine}" rel="tooltip-distributor"><i class="fa fa-info-circle info_button" title="Нажмите, чтобы открыть фото и описание" data-container="#content" style="font-size:14px;cursor:pointer" data-toggle="modal" data-target="#info-modal" onclick="fInfo(this)"></i>${star}<span>${row.distributor}</span></div>`
                        } else
                            return `<div class="product-distributor"><i class="fa fa-info-circle info_button" title="Нажмите, чтобы открыть фото и описание" data-container="#content" style="font-size:14px;cursor:pointer" data-toggle="modal" data-target="#info-modal" onclick="fInfo(this)"></i>${star}<span>${row.distributor}</span></div>`
                    }
                },
                {
                    render: function (data, type, row, meta) {
                        return `<div class="qty"><input class="select-qty" value="${row.multiplicity}" step="${row.multiplicity}" min="${row.multiplicity}" max="${row.stock}" type="number"></div>`
                    }
                },
                {
                    render: function (data, type, row, meta) {
                        let addCart = `<div>`
                        <?php if ($this->client->getId() === 0) { ?>
                        addCart +=    `<a onclick='fGuestCart(this)' class='href2 btn btn-sm'><i class='fa fa-shopping-cart tocart'></i></a>`
                        <?php } else { ?>
                        addCart +=    `<a onclick='fCart(this)' class='href2 btn btn-sm'><i class='fa fa-shopping-cart tocart'></i></a>`
                        <?php } ?>
                        addCart +=    `</div>`
                        return addCart
                    }
                }
            ],
            order: [[4, 'asc']],
            columnDefs: [
                {
                    orderable : false,
                    targets : 'no-sort',
                }
            ],
            drawCallback: function() {
                const pagination = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
                pagination.toggle(this.api().page.info().pages > 1);
            },
            createdRow: function ( row, data, index ) {
                const highlight = (data.highlight != "#FFFFFF") ? data.highlight : "";
                const tr = $(row);
                tr.css( 'background-color', `${highlight}` );
                tr.attr( 'row-id', data.key );
                tr.attr( 'row-data', data.to_cart );
                tr.attr( 'data-weight', data.weight );
                tr.find('td > .product-distributor.distributor-name').tooltip({
                    placement: 'top'
                });
                tr.find('td > .product-article').tooltip({
                    placement: 'top'
                });
                tr.find('td > .product-name').tooltip({
                    placement: 'top'
                });
            },
            initComplete: function (data, type, row, meta) {
                $('#dataTables-example_filter').prepend(selectorBrands);
                $('#brand_list').show()
                this.api().column(1).every( function () {
                    const column = this;
                    analogs.on( 'change', function () {
                        const vals = $('option:selected', this).map(function (index, element) {
                            return $.fn.dataTable.util.escapeRegex($(element).val());
                        }).toArray().join('|');

                        column
                            .search( vals.length > 0 ? '^('+vals+')$' : '', true, false )
                            .draw();
                    });
                });
                //запрет ручного ввода количества
                $('.select-qty').on('keypress', function (e){
                    return false;
                });
            }
        });
        $("[rel=tooltip]").tooltip({
            placement: 'top'
        });
    }

    //сайдбар фильтр
    $('#sidebar_form').submit(function (e) {
        e.preventDefault();
        sendFormAjax($(this).serializeArray())
    });
    function sendFormAjax(form) {
        const url = new URL(window.location.href)
        $.ajax({
            type: 'POST',
            url: url.pathname,
            data: form,
            beforeSend: function () {
                fWait();
            },
            success: function (res) {
                const result = JSON.parse(res)
                initTable(result.price, result.brands)
            },
            error: function () {
                fComplete();
            },
            complete: function () {
                fComplete();
            }
        })
    }

    //показать все предложения(кнопка)
    function getAllProducts() {
        <?php if ($this->client->isLogged()) { ?>
        const form = $('#sidebar_form').serializeArray();
        form.push({name:'show', value:'full'});
        sendFormAjax(form)
        <?php } else { ?>
        const alert_message = `Чтобы найти все предложения - <a href="/account/register" style="text-decoration: underline"
               onclick="event.preventDefault(); search_page_back(this.href)">
                Зарегистрируйтесь
            </a> или <a href="/account/login"  style="text-decoration: underline"
                        onclick="event.preventDefault(); search_page_back(this.href)">
            Войдите</a>`;
        if ($(this).hasClass('.alert-dismissable')) {
            $('.alert-dismissable').addClass('alert-danger');
            $('.alert-danger').html(alert_message);
        } else {
            $('.notif-login').html(`<div class="alert alert-dismissable alert-danger">${alert_message}</div>`)
        }
        <?php } ?>
    }
    //возврат на страницу поиска после авторизации/логина
    function search_page_back(link) {
        $.ajax({
            method: 'POST',
            url: '/parts/ajax_set_back_url',
            success: function (html) {
                document.location.href = link;
            }
        });
    }

    function fWait() {
        $('body').css('opacity', 0.5);
        $('.spin').show();
        $('body').css('position', 'relative');
    }
    function fComplete() {
        $('body').css('opacity', 1);
        $('.spin').hide();
        $('body').css('position', 'unset');
    }

    function initMultiselect(showBrands, brands, sb = null) {
        showBrands.multiselect('destroy');
        if(!sb)
            renderOptions(showBrands, brands)
        else
            renderOptionsSidebar(showBrands, brands)
        showBrands.multiselect({
            numberDisplayed: false,
            allSelectedText: 'Выбраны все',
            nonSelectedText: 'Выберите бренд',
            nSelectedText: 'выбрано',
            templates: {
                li: '<li class="checkList"><a tabindex="0"><div class="aweCheckbox aweCheckbox-danger"><label for=""></label></div></a></li>'
            },
            buttonTitle: function () {}
        });

        $('.multiselect-container div.aweCheckbox').each(function (index) {
            const id = `multiselect-${index}`,
                $input = $(this).find('input');
            $(this).find('label').attr('for', id);
            $input.attr('id', id);
            $input.detach();
            $input.prependTo($(this));
            $(this).click(function (e) {
                e.stopPropagation();
            });
        });
        if(sb) {
            replaceDataspan()
        }
    }
    function renderOptions(showBrands, brands) {
        let option = '';
        $.each(brands, function(key, value) {
            option += `<option class="brand-item" value="${value}">${value}</option>`
        })
        showBrands.html(option);
    }
    function renderOptionsSidebar(showBrands, brands) {
        let option = ''
        $.each(brands, function(key, value) {
            const days = (value.dtime) ? `${value.dtime} дн.` : '0 дн.'
            const price = (value.price) ? `от ${value.price} руб.` : ''
            option += `<option class="brand-item" data-price="${price}" data-days="${days}" value="${value.name}">${value.name}</option>`
        })
        showBrands.html(option)
    }
    function replaceDataspan() {
        $("#brands_selector .multiselect-container.dropdown-menu").find('li.brand-item')
            .each(function (){
                const info = $(this).find('input').val()
                const data_price = $("#brands > .brand-item[value = '"+info+"']").attr('data-price')
                const data_days = $("#brands > .brand-item[value = '"+info+"']").attr('data-days')
                const short_descr = `<span class="prices" style="font-size: 13px;">${data_price}</span><span class="days" style="font-size: 13px;">${data_days}</span>`
                $(this).find('.aweCheckbox').append(short_descr)
            });
        restyleBrands()
    }

    function fGuestCart(p) {
        let e = $(p).closest('[row-id]');
        if (e) addToGuestCart(e.attr('row-id'), e.find('input').val(), e.attr('row-data'));
    }
</script>
