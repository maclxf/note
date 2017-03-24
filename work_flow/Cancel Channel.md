# 删除新渠道流程

<div class="sub-title">页面制作：@lxf&emsp; 创建于：2017 3 23&emsp; 最后更新：3.23 17:28</div>
## 删除渠道
* ```application/controllers/Info.php```
    1. 取消仓库地址显示（当渠道是该仓库唯一的渠道，取消渠道时应当删除该地址显示）
    在此添加渠道id即可
    ```$warehouses = $this->address_model->get_simple_warehouses(array(3, 4, 5));``

* ```application/controllers/Intro.php```
    1. 渠道介绍页面入扣
    ```$this->titles```删除控制器中该属性对应渠道的值即可

* ```application/controllers/Package.php```
    1. 添加包裹预报时也应当取消显示仓库的选择（当渠道是该仓库唯一的渠道，取消渠道时应当删除该地址显示）
    ```$warehouses = $this->address_model->get_simple_warehouses(array(3, 4, 5));```

* ```application/views/common/header.php or footer.php```
    1. 前台页面头部脚部需要取消的渠道的展示

* ```application/views/dashboard/index.php```
    1. 用户首页仓库展示信息添加取消原因展示



**PS: 这里的删除是指用户无法再添加预报该仓库的包裹，以及显示取消该渠道的原因，并未真实的在数据中删除渠道，同时前后台依旧能对该渠道的包裹或订单进行查询**
