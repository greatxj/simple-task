# 简易个人任务管理系统

> 这是一个超级简易的个人任务管理系统，由 Laravel + Redis 构成

这仅仅是自己的一个小练习项目，应该也具有一定的参考性。

# V1.0

1. 一个界面，上半部分 Input，下半部分 List
2. Laravel 框架（引入 Redis） + Bootstrap 4.0（正好捎带学习 4.0） + Redis 实现
3. Redis 中有一个统筹的自增 ID：task:count，后面的 task 内容都要和这个 task:count 关联
4. Redis 中的 task 起名：task:$id:title 和 task:$id:content，$id 就是获取到的 task:count
5. 项目能增，能显示，就OK（入门而已，何必打击自己，能将今天的内容进行掌握即可）
