# git 合并冲突的处理

<div class="sub-title">页面制作：@lxf&emsp; 创建于：2016.08.26&emsp; 最后更新：08.16.14.05</div>

## 1. 冲突提示
当使用`git merge`命令合并分支出现冲突时，git会出现如下提示：

```
Auto-merging app/views/js/common.js
CONFLICT (content): Merge conflict in app/views/js/common.js
Automatic merge failed; fix conflicts and then commit the result.

```
以上命令提示你正在合并的某个文件存在冲突，需要你修改冲突.


## 2. 查看具体文件
为了了解刚才的`git merge`命令合并成功了哪些文件，使用`git status`进行查看

```
On branch master
Your branch is up-to-date with 'origin/master'.
You have unmerged paths.
  (fix conflicts and run "git commit")

Changes to be committed:

        modified:   app/config/language.php
        modified:   app/controllers/transfer.php
        modified:   app/helpers/language_helper.php
        modified:   app/views/biz/address.php
        modified:   app/views/biz/colissimo.php
        modified:   app/views/biz/sender.php
        modified:   app/views/biz/store.php
        new file:   app/views/js/cn.language.js
        new file:   app/views/js/fr.language.js

Unmerged paths:
  (use "git add <file>..." to mark resolution)

        both modified:   app/views/common/header.php
        both modified:   app/views/js/common.js
```
以上命令提示你有未能合并的文件，需要你解决冲突并提交
Unmerged paths是未合并的文件

## 3.解决冲突
使用`git diff`查看冲突文件，会详细显示冲突在哪些地方，根据需要解决冲突

```
++<<<<<<< HEAD
 +    <script type='text/javascript' src='<?php echo base_url(); ?>app/views/js/common.js?v=10.9939'></script>
++=======
+     <?php if($this->input->cookie('adi_fr_lang') == 'cn') { ?>
+         <script type='text/javascript' src='<?php echo base_url(); ?>app/views/js/cn.language.js'></script>
+     <?php } else if($this->input->cookie('adi_fr_lang') == 'fr') { ?>
+         <script type='text/javascript' src='<?php echo base_url(); ?>app/views/js/fr.language.js'></script>
+     <?php } ?>
+     <script type='text/javascript' src='<?php echo base_url(); ?>app/views/js/common.js?v=10.9938'></script>
++>>>>>>> dev_js_translate

```

## 4.确认提交
此时你在工作区中再一次修改了文件，由此请使用命令`git add`和`git commit`重新提交一次，那么此次冲突解决就完成了

*PS:在合并时若合并失败那么git是给你建了一个临时分支的因为分支的指向由(master)=>(master|MERGING),而在你commit时，分支又变回了master,由此可以看到未曾重新merge*