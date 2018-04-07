<template>
  <div class="container-fluid">

    <div align="center" class="logo-holder">
      <img width="30%" src="../assets/img/logo/CPCLL-logo.png">
    </div>
    <div class="row content">
      <div>
        <h2 align="center">
          主办
        </h2>
        <h2 align="center" style="padding-bottom: 1em">
          “第二届全国大专华文阅读比赛”简章
        </h2 sty>
        <p>
          （一）宗旨：
        </p>
        <div style="padding-left: 3em">
          <ol>
            <li >通过比赛，激发新加坡大专学生阅读华文书籍的兴趣;</li>
            <li>培养大专学生欣赏文学作品的能力；</li>
            <li>表扬热爱阅读的学生，带动大专学府的阅读风气。 </li>
          </ol>
        </div>

        <p>
          （二）主办单位：推广华文学习委员会(CPCLL)
        </p>
        <p>
          （三）联办机构：国家图书馆管理局（NLB）、联合早报《现在》（zbNOW）
        </p>
        <p>
          （四）参赛资格：
        </p>
        <ul  style="padding-left: 3em">
          <li>新加坡各大专学府的在籍学生均可参加。</li>
          <li>参赛者可以个人或小组参赛。个人参赛者须为新加坡公民；小组参赛以三人为限，其中两人须为新加坡公民。</li>
          <li>虚报个人资料者，主办当局有权取消其参赛资格。</li>
        </ul>
        <p>
          （五）比赛详情：比赛包括初赛和决赛。
        </p>
        <h5  style="padding-left: 2em"><u>初赛</u></h5>
        <ul>
          <li>参赛者须阅读主办当局指定的<router-link to="/Book">四本读物</router-link>，并于2018年3月1日至3月15日到“第二届全国大专华文阅读比赛”网站完成指定题目。</li>
          <li>小说、散文、诗歌各体裁的前三名皆可获得奖品。此外，所有参赛者将获得参赛证书以及“2018年世界书香日”精美礼品一份。</li>
          <li>初赛成绩将于决赛现场公布。所有参赛者必须出席“第二届全国大专华文阅读比赛”决赛。</li>
          <li>初赛整体分数最高的前六名将进入决赛。决赛当天也会同时举行颁奖典礼。缺席“第二届全国大专华文阅读比赛”决赛的获奖者，当作弃权。</li>
        </ul>
        <h5 style="padding-left: 2em; font-style: "><u>决赛</u></h5>
        <ul>
          <li>比赛形式：现场回答问题。题型包括必答、选答和抢答</li>
          <li>题目范围：与指定读本相关的内容、课外文学常识</li>
          <li><strong>比赛日期：2018年4月7日 （星期六）</strong></li>
          <li><strong>比赛时间：上午9时30分至11时30分</strong></li>
          <li>
              <p>
                <strong>
                  比赛地点：华侨中学（高中部）第三讲堂<br>
                  &emsp;&emsp;&emsp;&emsp;&emsp;LT3 Hwa Chong Institution（College Section）<br>
                  &emsp;&emsp;&emsp;&emsp;&emsp;661 Bukit Timah Road, Singapore 269734<br>
                </strong>
              </p>

          </li>
        </ul>
        <p>
          （六）指定读物：
        </p>
        <ul>
          <li>小说两本：《不存在的情人》（英培安著）、《备忘录——新加坡华文小说读本》（柯思仁、许维贤主编）</li>
          <li>散文任选一本：《半世纪的新加坡——回顾与前瞻》（周兆呈、游俊豪、符诗专主编）或 《亮光》（尤今著）</li>
          <li>诗集一本：《遇见诗——林高读19新加坡诗人》（林高主编）</li>
        </ul>
        <p style="padding-left: 2em">*上述指定读物可以到图书馆借阅。</p>
        <p>
          （七）奖品：
        </p>
        <div style="padding-left: 3em">
          <h5><u>初赛</u></h5>
          <p>小说、散文、诗歌各体裁的冠军可获得500元购书礼券，亚军可获得300元购书礼券，季军可获得100元购书礼券。</p>
          <h5><u>决赛</u></h5>
          <p>冠军：每人一个iPad、免费订阅《联合早报》电子版一年</p>
          <p>亚军：每人200元购书礼券、免费订阅《联合早报》电子版半年</p>
          <p>季军：每人100元购书礼券、免费订阅《联合早报》电子版三个月</p>
          <p>优胜奖：每人80元购书礼券</p>
        </div>
        <p>
          （八）报名方式：
        </p>
        <p style="padding-left: 3em">有意参赛者，可于2018年1月15日至2月28日到比赛网站 <a href="https://www.sgclreadingcompetition.com/">www.sgclreadingcompetition.com</a> 报名。</p>
        <p>
          （九）若本章程有未尽善处，主办单位有权修改之​，​也对本章程有最终解释权。评审结果以评判团之決定为准，参赛者不得​有​异议​。​
        </p>
        <p>
        </p>
      </div>
    </div>
  </div>
</template>

<style scoped>

  .logo-holder{
    padding: 20px;
  }

  .content{
    text-align: justify;
    padding-top: 10px;
    padding-bottom: 10px;
    overflow: hidden;
  }

  .contact{
    text-align: left;
  }

  @media (min-width: 600px){
    .content{
      padding-left: 15%;
      padding-right: 15%;
      font-size: large;
    }
  }

  @media (min-width: 0px) and (max-width: 599px){
    .content{
      padding-left: 5%;
      padding-right: 5%;
      font-size: small;
    }
  }

</style>
