# 安达易开发工作流程

<div class="sub-title">页面制作：@lxf&emsp; 创建于：2017.09.02&emsp; 最后更新：09.02 09：00</div>

## 1. 了解需求
* tower
* 沟通
    - 需求方的需求
    - 开发的想法
    - 实现
* 设计
    - 数据库
        - 先有表结构参考ADI需要的表的格式
    - 代码结构
* 讨论方案  `我事先应准备一个基本方案（就是说我应了解需求）`

## 2. 程序员开发

## 3. 线下测试记录
* git记录
> 记录什么？
    1. 增对修改代码做的测试的内容（测试了哪些情况，如果是修改已存在的方法是否影响到其他调用的地方）

## 4. 代码审核（model层条件...，数据库操作）
* 数据库（新添字段，增加字段）`新增字段符合使用标准`
* model层代码`着重检查update，delete是否有where条件以及调用效果`

## 5. 上传
* 推送到github
* 由我deploy `推送前检查本次推送程序员的git记录是否有遗漏的测试`

## 6. 线上测试
* PS:如果功能使用方是法国方面，那么上线测试的时间应安排在上午

## 7. 通知（通知到需求方，通知到群，格式）
>
项目名称，新增功能（|| 优化功能 || 修复BUG）:
1. 本次修改调整内容描述（描述伴有截图），如果有多处调整需要一一说明
2. 逐个@需求有关的人

