# 添加新渠道流程

<div class="sub-title">页面制作：@lxf&emsp; 创建于：2016.10.20&emsp; 最后更新：10.20 13:25</div>
## 添加仓库 <span style="color: gray;font-size: 20px">（若只是添加渠道可已忽略）</span>
* 后台添加信息
    1. 仓库信息
        - 展示运单号或订单号需要直接修改数据库字段```using_type```
        - 若未设置渠道，该仓库状态需要直接修改数据库字段```status```

    2. 增值服务信息

    3. 为客服赋权限
    4. 数据库中```adi_tutorial_category```添加攻略说明

* 添加配置信息
    1. 增值服务的配置```config/value_service```
    2. 仓库地址描述配置``` config/addr_descriptor```


* 页面添加
    1. 在用户的dashboard页面添加新的仓库模块

## 添加渠道
* 添加后台信息
    1. 渠道信息
        - 渠道供应商需要直接修改数据库字段```channel_supplier```
        - 与仓库进行绑定


* 添加配置信息
    1. 渠道是否需要证件信息配置```config/channel```
    2. 体积附加费的配置```config/channel```
    3. 奶粉渠道的配置```config/channel```
    4. 渠道数据导出设置的配置```config/channel```
        - 若需要导出需要导出模板
        - 根据模板编写导出代码
        - 导出权限配置```config/oprt_privilege```

    5. 点击更新状态配置```config/transporting_status_msg```
    6. 渠道对应的快递公司配置```config/kuaidi100_status```

* 页面添加
    1. 在```common/header```中，导航栏添加【仓库】以及下拉框【渠道】、【攻略】
        - ```intro/html``` 添加静态页面（静态页面必须以intro-开头）
        - ```intro```控制器添加```_titles```配置
    2. 在```common/footer```中，导航栏添加【仓库】以及下拉框【渠道】、【攻略】

## 添加QQ号
* views/dashboard/index
* views/static/contact_us
* views/index
* views/email/common/footer
* views/common/contact(只有法国QQ群才改)
* views/intro/warehouse_fr_footer(只有法国QQ群才改)