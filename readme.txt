Git is a distributed version control system.
Git is free software distributed under the GPL

git init	初始化代码库
git add [file]	添加文件到代码库
git commit -m "message" 上传文件
git reset --hard HEAD^ 回退到上一次修改，回退几次就加几个^
git reset --hard [cmmit NO] 回到指定的版本号
git reflog 查看以往的命令，以便确定要回到哪个版本
git status 查看代码库的状态
git checkout -- <file> 让文件回到最近一次的git commit或者git add时候的状态
git reset HEAD <file> 把暂存区的修改撤销掉
	当改乱了工作区的某个文件的内容，想直接丢弃工作区的修改时，用命令git checkout -- <file>
	当不但改乱了工作区的文件内容，还添加到了缓存区的时候，用命令git reset HEAD <file>，回到最近一次的commit或者add的状态，然后再执行git checkout
	已经提交了修改的文件，回滚到对应的版本号
git rm 从项目中删除文件,删错了像恢复,git checkout -- <file>



/*******************连接远程库*************************/

创建SSH key
ssh-keygen -t rsa -C "youemail@example.com"
在github账户下面创建账户级别的公钥
	将.ssh目录下面的id_rsa.pub文件内容粘贴到Key文本框，Title随意
git remote add <origin> git@server-name:username/repo-name.git 关联一个远程库
git push u <origin> master

git checkout -b <branch> 创建分支+切换
git branch 查看分支
git branch <branch> 创建分支
git checkout <branch> 切换分支
git merge <branch> 将分支的修改合并到master上
git branch -d <branch> 删除不需要的分支
//因为创建、合并和删除分支非常快，所以Git鼓励你使用分支完成某个任务，合并后再删掉分支，这和直接在master分支上工作效果是一样的，但过程更安全。

change from master