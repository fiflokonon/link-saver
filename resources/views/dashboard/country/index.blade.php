@extends('dashboard.index')
@section('title', 'Countries')
@section('content')
    <!--{ app content start }-->
    <div class="main-content app-content mt-0">
        <div class="side-app">
            <!--{ container start }-->
            <div class="main-container container-fluid">
                <!--{ PAGE HEADER START }-->
                <div class="page-header">
                    <h1 class="page-title">Data Table</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                        </ol>
                    </div>
                </div>
                <!--{ PAGE HEADER END }-->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Basic Datatable</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">First name</th>
                                            <th class="wd-15p border-bottom-0">Last name</th>
                                            <th class="wd-20p border-bottom-0">Position</th>
                                            <th class="wd-15p border-bottom-0">Start date</th>
                                            <th class="wd-10p border-bottom-0">Salary</th>
                                            <th class="wd-25p border-bottom-0">E-mail</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Alice</td>
                                            <td>Johnson</td>
                                            <td>Web Designer</td>
                                            <td>2019/05/15</td>
                                            <td>$75,000</td>
                                            <td>alice.johnson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Bob</td>
                                            <td>Williams</td>
                                            <td>Software Engineer</td>
                                            <td>2020/02/28</td>
                                            <td>$85,000</td>
                                            <td>bob.williams@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Charlie</td>
                                            <td>Smith</td>
                                            <td>Data Analyst</td>
                                            <td>2018/09/10</td>
                                            <td>$70,000</td>
                                            <td>charlie.smith@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Diana</td>
                                            <td>Miller</td>
                                            <td>UX Designer</td>
                                            <td>2021/11/20</td>
                                            <td>$80,000</td>
                                            <td>diana.miller@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ethan</td>
                                            <td>Wilson</td>
                                            <td>Project Manager</td>
                                            <td>2017/06/05</td>
                                            <td>$95,000</td>
                                            <td>ethan.wilson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Alice</td>
                                            <td>Johnson</td>
                                            <td>Web Designer</td>
                                            <td>2019/05/15</td>
                                            <td>$75,000</td>
                                            <td>alice.johnson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Bob</td>
                                            <td>Williams</td>
                                            <td>Software Engineer</td>
                                            <td>2020/02/28</td>
                                            <td>$85,000</td>
                                            <td>bob.williams@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Charlie</td>
                                            <td>Smith</td>
                                            <td>Data Analyst</td>
                                            <td>2018/09/10</td>
                                            <td>$70,000</td>
                                            <td>charlie.smith@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Diana</td>
                                            <td>Miller</td>
                                            <td>UX Designer</td>
                                            <td>2021/11/20</td>
                                            <td>$80,000</td>
                                            <td>diana.miller@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ethan</td>
                                            <td>Wilson</td>
                                            <td>Project Manager</td>
                                            <td>2017/06/05</td>
                                            <td>$95,000</td>
                                            <td>ethan.wilson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona</td>
                                            <td>Evans</td>
                                            <td>Marketing Specialist</td>
                                            <td>2019/08/12</td>
                                            <td>$78,000</td>
                                            <td>fiona.evans@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin</td>
                                            <td>Harrison</td>
                                            <td>System Administrator</td>
                                            <td>2020/03/25</td>
                                            <td>$88,000</td>
                                            <td>gavin.harrison@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Holly</td>
                                            <td>Turner</td>
                                            <td>HR Coordinator</td>
                                            <td>2018/12/08</td>
                                            <td>$65,000</td>
                                            <td>holly.turner@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ian</td>
                                            <td>Porter</td>
                                            <td>Network Engineer</td>
                                            <td>2019/04/30</td>
                                            <td>$82,000</td>
                                            <td>ian.porter@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Jessica</td>
                                            <td>Lee</td>
                                            <td>Product Manager</td>
                                            <td>2020/07/17</td>
                                            <td>$90,000</td>
                                            <td>jessica.lee@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Kyle</td>
                                            <td>Roberts</td>
                                            <td>Quality Assurance Analyst</td>
                                            <td>2018/11/22</td>
                                            <td>$72,000</td>
                                            <td>kyle.roberts@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lisa</td>
                                            <td>Warren</td>
                                            <td>Content Writer</td>
                                            <td>2021/02/14</td>
                                            <td>$68,000</td>
                                            <td>lisa.warren@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Michael</td>
                                            <td>Baker</td>
                                            <td>IT Support Specialist</td>
                                            <td>2017/09/05</td>
                                            <td>$75,000</td>
                                            <td>michael.baker@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Natalie</td>
                                            <td>Cheng</td>
                                            <td>Customer Success Manager</td>
                                            <td>2019/12/10</td>
                                            <td>$88,000</td>
                                            <td>natalie.cheng@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Oscar</td>
                                            <td>Reyes</td>
                                            <td>Database Administrator</td>
                                            <td>2020/06/28</td>
                                            <td>$87,000</td>
                                            <td>oscar.reyes@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Paige</td>
                                            <td>Fletcher</td>
                                            <td>Graphic Designer</td>
                                            <td>2018/03/12</td>
                                            <td>$70,000</td>
                                            <td>paige.fletcher@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Quentin</td>
                                            <td>Stewart</td>
                                            <td>Business Analyst</td>
                                            <td>2019/09/19</td>
                                            <td>$80,000</td>
                                            <td>quentin.stewart@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Rachel</td>
                                            <td>Wong</td>
                                            <td>Technical Writer</td>
                                            <td>2021/01/25</td>
                                            <td>$72,000</td>
                                            <td>rachel.wong@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Samuel</td>
                                            <td>Harper</td>
                                            <td>IT Consultant</td>
                                            <td>2017/05/14</td>
                                            <td>$85,000</td>
                                            <td>samuel.harper@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Tina</td>
                                            <td>Nguyen</td>
                                            <td>Human Resources Specialist</td>
                                            <td>2019/11/30</td>
                                            <td>$75,000</td>
                                            <td>tina.nguyen@example.com</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- { Responsive DataTable } start -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Responsive DataTable</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">First name</th>
                                            <th class="wd-15p border-bottom-0">Last name</th>
                                            <th class="wd-20p border-bottom-0">Position</th>
                                            <th class="wd-15p border-bottom-0">Start date</th>
                                            <th class="wd-10p border-bottom-0">Salary</th>
                                            <th class="wd-25p border-bottom-0">E-mail</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>Product Manager</td>
                                            <td>2020/05/15</td>
                                            <td>$800,000</td>
                                            <td>john.doe@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Jane</td>
                                            <td>Smith</td>
                                            <td>UX Designer</td>
                                            <td>2019/04/22</td>
                                            <td>$600,000</td>
                                            <td>jane.smith@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Alice</td>
                                            <td>Johnson</td>
                                            <td>Software Engineer</td>
                                            <td>2018/11/10</td>
                                            <td>$700,000</td>
                                            <td>alice.johnson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Bob</td>
                                            <td>Anderson</td>
                                            <td>Data Analyst</td>
                                            <td>2017/08/05</td>
                                            <td>$550,000</td>
                                            <td>bob.anderson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Eva</td>
                                            <td>Miller</td>
                                            <td>Graphic Designer</td>
                                            <td>2016/03/18</td>
                                            <td>$480,000</td>
                                            <td>eva.miller@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Samuel</td>
                                            <td>Wong</td>
                                            <td>Frontend Developer</td>
                                            <td>2015/10/29</td>
                                            <td>$620,000</td>
                                            <td>samuel.wong@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Natalie</td>
                                            <td>Ryan</td>
                                            <td>Content Writer</td>
                                            <td>2018/07/21</td>
                                            <td>$540,000</td>
                                            <td>natalie.ryan@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>David</td>
                                            <td>Nguyen</td>
                                            <td>Network Administrator</td>
                                            <td>2017/04/14</td>
                                            <td>$670,000</td>
                                            <td>david.nguyen@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Sophie</td>
                                            <td>Turner</td>
                                            <td>Mobile App Developer</td>
                                            <td>2019/02/12</td>
                                            <td>$720,000</td>
                                            <td>sophie.turner@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Miles</td>
                                            <td>Perez</td>
                                            <td>Data Scientist</td>
                                            <td>2018/09/08</td>
                                            <td>$590,000</td>
                                            <td>miles.perez@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Isabella</td>
                                            <td>Clark</td>
                                            <td>UI/UX Designer</td>
                                            <td>2017/06/25</td>
                                            <td>$550,000</td>
                                            <td>isabella.clark@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Aiden</td>
                                            <td>Fletcher</td>
                                            <td>Software Tester</td>
                                            <td>2016/01/30</td>
                                            <td>$490,000</td>
                                            <td>aiden.fletcher@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Sophia</td>
                                            <td>Cooper</td>
                                            <td>Database Administrator</td>
                                            <td>2018/12/07</td>
                                            <td>$600,000</td>
                                            <td>sophia.cooper@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Oliver</td>
                                            <td>Williams</td>
                                            <td>SEO Specialist</td>
                                            <td>2017/11/14</td>
                                            <td>$520,000</td>
                                            <td>oliver.williams@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Emma</td>
                                            <td>Bennett</td>
                                            <td>Project Manager</td>
                                            <td>2016/08/18</td>
                                            <td>$680,000</td>
                                            <td>emma.bennett@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Jack</td>
                                            <td>Turner</td>
                                            <td>Technical Support</td>
                                            <td>2015/09/22</td>
                                            <td>$470,000</td>
                                            <td>jack.turner@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ava</td>
                                            <td>Fisher</td>
                                            <td>Marketing Specialist</td>
                                            <td>2019/10/11</td>
                                            <td>$580,000</td>
                                            <td>ava.fisher@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Elijah</td>
                                            <td>Harper</td>
                                            <td>Business Analyst</td>
                                            <td>2018/04/27</td>
                                            <td>$650,000</td>
                                            <td>elijah.harper@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Liam</td>
                                            <td>Williams</td>
                                            <td>Software Developer</td>
                                            <td>2019/08/10</td>
                                            <td>$720,000</td>
                                            <td>liam.williams@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia</td>
                                            <td>Johnson</td>
                                            <td>UX/UI Designer</td>
                                            <td>2018/06/05</td>
                                            <td>$620,000</td>
                                            <td>olivia.johnson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Noah</td>
                                            <td>Martin</td>
                                            <td>Product Manager</td>
                                            <td>2017/02/28</td>
                                            <td>$800,000</td>
                                            <td>noah.martin@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Emma</td>
                                            <td>Davis</td>
                                            <td>Frontend Developer</td>
                                            <td>2016/09/14</td>
                                            <td>$650,000</td>
                                            <td>emma.davis@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Aiden</td>
                                            <td>Anderson</td>
                                            <td>Data Analyst</td>
                                            <td>2015/11/20</td>
                                            <td>$580,000</td>
                                            <td>aiden.anderson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Sophia</td>
                                            <td>Thompson</td>
                                            <td>Marketing Specialist</td>
                                            <td>2014/07/02</td>
                                            <td>$700,000</td>
                                            <td>sophia.thompson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lucas</td>
                                            <td>Morris</td>
                                            <td>Database Administrator</td>
                                            <td>2013/04/16</td>
                                            <td>$670,000</td>
                                            <td>lucas.morris@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Isabella</td>
                                            <td>Gray</td>
                                            <td>SEO Specialist</td>
                                            <td>2012/01/10</td>
                                            <td>$550,000</td>
                                            <td>isabella.gray@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson</td>
                                            <td>Collins</td>
                                            <td>Business Analyst</td>
                                            <td>2011/07/25</td>
                                            <td>$640,000</td>
                                            <td>jackson.collins@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Mia</td>
                                            <td>Roberts</td>
                                            <td>Project Manager</td>
                                            <td>2010/03/15</td>
                                            <td>$760,000</td>
                                            <td>mia.roberts@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ethan</td>
                                            <td>Wilson</td>
                                            <td>Mobile App Developer</td>
                                            <td>2019/05/02</td>
                                            <td>$680,000</td>
                                            <td>ethan.wilson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Amelia</td>
                                            <td>Turner</td>
                                            <td>Graphic Designer</td>
                                            <td>2018/11/14</td>
                                            <td>$520,000</td>
                                            <td>amelia.turner@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>James</td>
                                            <td>Baker</td>
                                            <td>Network Administrator</td>
                                            <td>2017/08/20</td>
                                            <td>$630,000</td>
                                            <td>james.baker@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ava</td>
                                            <td>Brooks</td>
                                            <td>Technical Support</td>
                                            <td>2016/04/05</td>
                                            <td>$480,000</td>
                                            <td>ava.brooks@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Logan</td>
                                            <td>Hughes</td>
                                            <td>SEO Specialist</td>
                                            <td>2015/12/10</td>
                                            <td>$570,000</td>
                                            <td>logan.hughes@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Harper</td>
                                            <td>Ramirez</td>
                                            <td>Content Writer</td>
                                            <td>2014/06/23</td>
                                            <td>$510,000</td>
                                            <td>harper.ramirez@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Benjamin</td>
                                            <td>Grayson</td>
                                            <td>Software Developer</td>
                                            <td>2013/03/08</td>
                                            <td>$670,000</td>
                                            <td>benjamin.grayson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lily</td>
                                            <td>McCarthy</td>
                                            <td>Frontend Developer</td>
                                            <td>2012/09/16</td>
                                            <td>$610,000</td>
                                            <td>lily.mccarthy@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Carter</td>
                                            <td>Robinson</td>
                                            <td>Data Analyst</td>
                                            <td>2011/04/30</td>
                                            <td>$540,000</td>
                                            <td>carter.robinson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Scarlett</td>
                                            <td>Stewart</td>
                                            <td>Marketing Specialist</td>
                                            <td>2010/10/14</td>
                                            <td>$700,000</td>
                                            <td>scarlett.stewart@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Henry</td>
                                            <td>Morris</td>
                                            <td>Database Administrator</td>
                                            <td>2019/02/18</td>
                                            <td>$640,000</td>
                                            <td>henry.morris@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Grace</td>
                                            <td>Adams</td>
                                            <td>SEO Specialist</td>
                                            <td>2018/07/05</td>
                                            <td>$560,000</td>
                                            <td>grace.adams@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Leo</td>
                                            <td>Chen</td>
                                            <td>Business Analyst</td>
                                            <td>2017/04/21</td>
                                            <td>$630,000</td>
                                            <td>leo.chen@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Stella</td>
                                            <td>Murphy</td>
                                            <td>Project Manager</td>
                                            <td>2016/01/14</td>
                                            <td>$760,000</td>
                                            <td>stella.murphy@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Connor</td>
                                            <td>Reid</td>
                                            <td>Mobile App Developer</td>
                                            <td>2015/08/29</td>
                                            <td>$690,000</td>
                                            <td>connor.reid@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Eva</td>
                                            <td>Roberts</td>
                                            <td>Content Writer</td>
                                            <td>2014/06/12</td>
                                            <td>$510,000</td>
                                            <td>eva.roberts@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lucas</td>
                                            <td>Johnson</td>
                                            <td>Software Developer</td>
                                            <td>2013/02/25</td>
                                            <td>$670,000</td>
                                            <td>lucas.johnson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Emily</td>
                                            <td>Reyes</td>
                                            <td>Frontend Developer</td>
                                            <td>2012/09/10</td>
                                            <td>$610,000</td>
                                            <td>emily.reyes@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Mason</td>
                                            <td>Lee</td>
                                            <td>Data Analyst</td>
                                            <td>2011/05/24</td>
                                            <td>$540,000</td>
                                            <td>mason.lee@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Aria</td>
                                            <td>Collins</td>
                                            <td>Marketing Specialist</td>
                                            <td>2010/11/08</td>
                                            <td>$700,000</td>
                                            <td>aria.collins@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Wyatt</td>
                                            <td>Morgan</td>
                                            <td>Mobile App Developer</td>
                                            <td>2019/05/17</td>
                                            <td>$680,000</td>
                                            <td>wyatt.morgan@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Scarlett</td>
                                            <td>Stewart</td>
                                            <td>Graphic Designer</td>
                                            <td>2018/11/02</td>
                                            <td>$520,000</td>
                                            <td>scarlett.stewart@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Grayson</td>
                                            <td>Roberts</td>
                                            <td>Network Administrator</td>
                                            <td>2017/08/17</td>
                                            <td>$630,000</td>
                                            <td>grayson.roberts@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lily</td>
                                            <td>Turner</td>
                                            <td>Technical Support</td>
                                            <td>2016/04/01</td>
                                            <td>$480,000</td>
                                            <td>lily.turner@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Logan</td>
                                            <td>Hughes</td>
                                            <td>SEO Specialist</td>
                                            <td>2015/12/15</td>
                                            <td>$570,000</td>
                                            <td>logan.hughes@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Harper</td>
                                            <td>Ramirez</td>
                                            <td>Content Writer</td>
                                            <td>2014/06/28</td>
                                            <td>$510,000</td>
                                            <td>harper.ramirez@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Benjamin</td>
                                            <td>Grayson</td>
                                            <td>Software Developer</td>
                                            <td>2013/03/13</td>
                                            <td>$670,000</td>
                                            <td>benjamin.grayson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lily</td>
                                            <td>McCarthy</td>
                                            <td>Frontend Developer</td>
                                            <td>2012/09/21</td>
                                            <td>$610,000</td>
                                            <td>lily.mccarthy@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Carter</td>
                                            <td>Robinson</td>
                                            <td>Data Analyst</td>
                                            <td>2011/05/04</td>
                                            <td>$540,000</td>
                                            <td>carter.robinson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Scarlett</td>
                                            <td>Stewart</td>
                                            <td>Marketing Specialist</td>
                                            <td>2010/10/18</td>
                                            <td>$700,000</td>
                                            <td>scarlett.stewart@example.com</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- { Responsive DataTable } end -->
                <!-- { Responsive Modal DataTable } start -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Responsive Modal DataTable</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                        <tr>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Position</th>
                                            <th class="border-bottom-0">Office</th>
                                            <th class="border-bottom-0">Age</th>
                                            <th class="border-bottom-0">Start date</th>
                                            <th class="border-bottom-0">Salary</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>28</td>
                                            <td>2020/12/15</td>
                                            <td>$85,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jane Smith</td>
                                            <td>Data Scientist</td>
                                            <td>San Francisco</td>
                                            <td>35</td>
                                            <td>2018/07/22</td>
                                            <td>$110,000</td>
                                        </tr>
                                        <tr>
                                            <td>Alice Johnson</td>
                                            <td>UX Designer</td>
                                            <td>Los Angeles</td>
                                            <td>30</td>
                                            <td>2019/03/10</td>
                                            <td>$95,000</td>
                                        </tr>
                                        <tr>
                                            <td>Bob Williams</td>
                                            <td>Network Administrator</td>
                                            <td>Chicago</td>
                                            <td>32</td>
                                            <td>2017/09/05</td>
                                            <td>$88,000</td>
                                        </tr>
                                        <tr>
                                            <td>Eva Davis</td>
                                            <td>Project Manager</td>
                                            <td>Miami</td>
                                            <td>40</td>
                                            <td>2015/06/18</td>
                                            <td>$120,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Lee</td>
                                            <td>Database Analyst</td>
                                            <td>Seattle</td>
                                            <td>29</td>
                                            <td>2021/02/28</td>
                                            <td>$92,000</td>
                                        </tr>
                                        <tr>
                                            <td>Sarah White</td>
                                            <td>Frontend Developer</td>
                                            <td>Boston</td>
                                            <td>31</td>
                                            <td>2016/11/12</td>
                                            <td>$100,000</td>
                                        </tr>
                                        <tr>
                                            <td>David Brown</td>
                                            <td>System Administrator</td>
                                            <td>Denver</td>
                                            <td>34</td>
                                            <td>2014/08/07</td>
                                            <td>$85,000</td>
                                        </tr>
                                        <tr>
                                            <td>Emily Taylor</td>
                                            <td>Quality Assurance</td>
                                            <td>Atlanta</td>
                                            <td>27</td>
                                            <td>2022/05/20</td>
                                            <td>$80,000</td>
                                        </tr>
                                        <tr>
                                            <td>Chris Anderson</td>
                                            <td>Software Developer</td>
                                            <td>Austin</td>
                                            <td>33</td>
                                            <td>2013/04/09</td>
                                            <td>$95,000</td>
                                        </tr>
                                        <tr>
                                            <td>Lisa Miller</td>
                                            <td>Graphic Designer</td>
                                            <td>Portland</td>
                                            <td>26</td>
                                            <td>2023/08/14</td>
                                            <td>$75,000</td>
                                        </tr>
                                        <tr>
                                            <td>Mark Wilson</td>
                                            <td>IT Consultant</td>
                                            <td>Houston</td>
                                            <td>38</td>
                                            <td>2012/11/30</td>
                                            <td>$105,000</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Rodriguez</td>
                                            <td>Business Analyst</td>
                                            <td>Phoenix</td>
                                            <td>29</td>
                                            <td>2020/04/02</td>
                                            <td>$90,000</td>
                                        </tr>
                                        <tr>
                                            <td>William Smith</td>
                                            <td>Software Engineer</td>
                                            <td>Dallas</td>
                                            <td>31</td>
                                            <td>2018/03/25</td>
                                            <td>$98,000</td>
                                        </tr>
                                        <tr>
                                            <td>Amy Brown</td>
                                            <td>UX/UI Designer</td>
                                            <td>San Diego</td>
                                            <td>27</td>
                                            <td>2021/01/12</td>
                                            <td>$85,000</td>
                                        </tr>
                                        <tr>
                                            <td>Nathan Turner</td>
                                            <td>Data Scientist</td>
                                            <td>Orlando</td>
                                            <td>34</td>
                                            <td>2017/06/08</td>
                                            <td>$110,000</td>
                                        </tr>
                                        <tr>
                                            <td>Grace Thompson</td>
                                            <td>Project Manager</td>
                                            <td>Philadelphia</td>
                                            <td>33</td>
                                            <td>2015/09/19</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel Clark</td>
                                            <td>Frontend Developer</td>
                                            <td>Charlotte</td>
                                            <td>30</td>
                                            <td>2019/07/03</td>
                                            <td>$95,000</td>
                                        </tr>
                                        <tr>
                                            <td>Emma Garcia</td>
                                            <td>System Administrator</td>
                                            <td>Las Vegas</td>
                                            <td>36</td>
                                            <td>2014/02/14</td>
                                            <td>$88,000</td>
                                        </tr>
                                        <tr>
                                            <td>Ryan Davis</td>
                                            <td>Network Engineer</td>
                                            <td>Detroit</td>
                                            <td>32</td>
                                            <td>2016/05/07</td>
                                            <td>$92,000</td>
                                        </tr>
                                        <tr>
                                            <td>Sophie Taylor</td>
                                            <td>Content Writer</td>
                                            <td>Vancouver</td>
                                            <td>28</td>
                                            <td>2022/09/08</td>
                                            <td>$70,000</td>
                                        </tr>
                                        <tr>
                                            <td>Connor Anderson</td>
                                            <td>Software Tester</td>
                                            <td>Calgary</td>
                                            <td>29</td>
                                            <td>2021/11/17</td>
                                            <td>$78,000</td>
                                        </tr>
                                        <tr>
                                            <td>Isabella Martinez</td>
                                            <td>Marketing Specialist</td>
                                            <td>Toronto</td>
                                            <td>31</td>
                                            <td>2019/06/05</td>
                                            <td>$88,000</td>
                                        </tr>
                                        <tr>
                                            <td>Nathan Walker</td>
                                            <td>Database Administrator</td>
                                            <td>Montreal</td>
                                            <td>33</td>
                                            <td>2018/03/30</td>
                                            <td>$95,000</td>
                                        </tr>
                                        <tr>
                                            <td>Victoria Kim</td>
                                            <td>UI/UX Developer</td>
                                            <td>Ottawa</td>
                                            <td>26</td>
                                            <td>2023/02/12</td>
                                            <td>$82,000</td>
                                        </tr>
                                        <tr>
                                            <td>Christopher Adams</td>
                                            <td>Business Intelligence Analyst</td>
                                            <td>Winnipeg</td>
                                            <td>35</td>
                                            <td>2017/08/22</td>
                                            <td>$105,000</td>
                                        </tr>
                                        <tr>
                                            <td>Mia Turner</td>
                                            <td>Software Architect</td>
                                            <td>Halifax</td>
                                            <td>32</td>
                                            <td>2016/01/19</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jackie Brown</td>
                                            <td>Technical Writer</td>
                                            <td>Edmonton</td>
                                            <td>30</td>
                                            <td>2020/04/28</td>
                                            <td>$75,000</td>
                                        </tr>
                                        <tr>
                                            <td>Lucas White</td>
                                            <td>DevOps Engineer</td>
                                            <td>Saskatoon</td>
                                            <td>34</td>
                                            <td>2015/12/14</td>
                                            <td>$98,000</td>
                                        </tr>
                                        <tr>
                                            <td>Madison Harris</td>
                                            <td>Quality Assurance Analyst</td>
                                            <td>Quebec City</td>
                                            <td>27</td>
                                            <td>2024/01/30</td>
                                            <td>$80,000</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- { Responsive Modal DataTable } end -->
                <!-- { Responsive DataTable } start -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Responsive DataTable</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                        <tr>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Position</th>
                                            <th class="border-bottom-0">Office</th>
                                            <th class="border-bottom-0">Age</th>
                                            <th class="border-bottom-0">Start date</th>
                                            <th class="border-bottom-0">Salary</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>28</td>
                                            <td>2020/12/15</td>
                                            <td>$85,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jane Smith</td>
                                            <td>Data Scientist</td>
                                            <td>San Francisco</td>
                                            <td>35</td>
                                            <td>2018/07/22</td>
                                            <td>$110,000</td>
                                        </tr>
                                        <tr>
                                            <td>Alice Johnson</td>
                                            <td>UX Designer</td>
                                            <td>Los Angeles</td>
                                            <td>30</td>
                                            <td>2019/03/10</td>
                                            <td>$95,000</td>
                                        </tr>
                                        <tr>
                                            <td>Bob Williams</td>
                                            <td>Network Administrator</td>
                                            <td>Chicago</td>
                                            <td>32</td>
                                            <td>2017/09/05</td>
                                            <td>$88,000</td>
                                        </tr>
                                        <tr>
                                            <td>Eva Davis</td>
                                            <td>Project Manager</td>
                                            <td>Miami</td>
                                            <td>40</td>
                                            <td>2015/06/18</td>
                                            <td>$120,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Lee</td>
                                            <td>Database Analyst</td>
                                            <td>Seattle</td>
                                            <td>29</td>
                                            <td>2021/02/28</td>
                                            <td>$92,000</td>
                                        </tr>
                                        <tr>
                                            <td>Sarah White</td>
                                            <td>Frontend Developer</td>
                                            <td>Boston</td>
                                            <td>31</td>
                                            <td>2016/11/12</td>
                                            <td>$100,000</td>
                                        </tr>
                                        <tr>
                                            <td>David Brown</td>
                                            <td>System Administrator</td>
                                            <td>Denver</td>
                                            <td>34</td>
                                            <td>2014/08/07</td>
                                            <td>$85,000</td>
                                        </tr>
                                        <tr>
                                            <td>Emily Taylor</td>
                                            <td>Quality Assurance</td>
                                            <td>Atlanta</td>
                                            <td>27</td>
                                            <td>2022/05/20</td>
                                            <td>$80,000</td>
                                        </tr>
                                        <tr>
                                            <td>Chris Anderson</td>
                                            <td>Software Developer</td>
                                            <td>Austin</td>
                                            <td>33</td>
                                            <td>2013/04/09</td>
                                            <td>$95,000</td>
                                        </tr>
                                        <tr>
                                            <td>Lisa Miller</td>
                                            <td>Graphic Designer</td>
                                            <td>Portland</td>
                                            <td>26</td>
                                            <td>2023/08/14</td>
                                            <td>$75,000</td>
                                        </tr>
                                        <tr>
                                            <td>Mark Wilson</td>
                                            <td>IT Consultant</td>
                                            <td>Houston</td>
                                            <td>38</td>
                                            <td>2012/11/30</td>
                                            <td>$105,000</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Rodriguez</td>
                                            <td>Business Analyst</td>
                                            <td>Phoenix</td>
                                            <td>29</td>
                                            <td>2020/04/02</td>
                                            <td>$90,000</td>
                                        </tr>
                                        <tr>
                                            <td>William Smith</td>
                                            <td>Software Engineer</td>
                                            <td>Dallas</td>
                                            <td>31</td>
                                            <td>2018/03/25</td>
                                            <td>$98,000</td>
                                        </tr>
                                        <tr>
                                            <td>Amy Brown</td>
                                            <td>UX/UI Designer</td>
                                            <td>San Diego</td>
                                            <td>27</td>
                                            <td>2021/01/12</td>
                                            <td>$85,000</td>
                                        </tr>
                                        <tr>
                                            <td>Nathan Turner</td>
                                            <td>Data Scientist</td>
                                            <td>Orlando</td>
                                            <td>34</td>
                                            <td>2017/06/08</td>
                                            <td>$110,000</td>
                                        </tr>
                                        <tr>
                                            <td>Grace Thompson</td>
                                            <td>Project Manager</td>
                                            <td>Philadelphia</td>
                                            <td>33</td>
                                            <td>2015/09/19</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel Clark</td>
                                            <td>Frontend Developer</td>
                                            <td>Charlotte</td>
                                            <td>30</td>
                                            <td>2019/07/03</td>
                                            <td>$95,000</td>
                                        </tr>
                                        <tr>
                                            <td>Emma Garcia</td>
                                            <td>System Administrator</td>
                                            <td>Las Vegas</td>
                                            <td>36</td>
                                            <td>2014/02/14</td>
                                            <td>$88,000</td>
                                        </tr>
                                        <tr>
                                            <td>Ryan Davis</td>
                                            <td>Network Engineer</td>
                                            <td>Detroit</td>
                                            <td>32</td>
                                            <td>2016/05/07</td>
                                            <td>$92,000</td>
                                        </tr>
                                        <tr>
                                            <td>Sophie Taylor</td>
                                            <td>Content Writer</td>
                                            <td>Vancouver</td>
                                            <td>28</td>
                                            <td>2022/09/08</td>
                                            <td>$70,000</td>
                                        </tr>
                                        <tr>
                                            <td>Connor Anderson</td>
                                            <td>Software Tester</td>
                                            <td>Calgary</td>
                                            <td>29</td>
                                            <td>2021/11/17</td>
                                            <td>$78,000</td>
                                        </tr>
                                        <tr>
                                            <td>Isabella Martinez</td>
                                            <td>Marketing Specialist</td>
                                            <td>Toronto</td>
                                            <td>31</td>
                                            <td>2019/06/05</td>
                                            <td>$88,000</td>
                                        </tr>
                                        <tr>
                                            <td>Nathan Walker</td>
                                            <td>Database Administrator</td>
                                            <td>Montreal</td>
                                            <td>33</td>
                                            <td>2018/03/30</td>
                                            <td>$95,000</td>
                                        </tr>
                                        <tr>
                                            <td>Victoria Kim</td>
                                            <td>UI/UX Developer</td>
                                            <td>Ottawa</td>
                                            <td>26</td>
                                            <td>2023/02/12</td>
                                            <td>$82,000</td>
                                        </tr>
                                        <tr>
                                            <td>Christopher Adams</td>
                                            <td>Business Intelligence Analyst</td>
                                            <td>Winnipeg</td>
                                            <td>35</td>
                                            <td>2017/08/22</td>
                                            <td>$105,000</td>
                                        </tr>
                                        <tr>
                                            <td>Mia Turner</td>
                                            <td>Software Architect</td>
                                            <td>Halifax</td>
                                            <td>32</td>
                                            <td>2016/01/19</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jackie Brown</td>
                                            <td>Technical Writer</td>
                                            <td>Edmonton</td>
                                            <td>30</td>
                                            <td>2020/04/28</td>
                                            <td>$75,000</td>
                                        </tr>
                                        <tr>
                                            <td>Lucas White</td>
                                            <td>DevOps Engineer</td>
                                            <td>Saskatoon</td>
                                            <td>34</td>
                                            <td>2015/12/14</td>
                                            <td>$98,000</td>
                                        </tr>
                                        <tr>
                                            <td>Madison Harris</td>
                                            <td>Quality Assurance Analyst</td>
                                            <td>Quebec City</td>
                                            <td>27</td>
                                            <td>2024/01/30</td>
                                            <td>$80,000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- { Responsive DataTable } end -->
                <!-- { File Export } start -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">File Export</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                        <tr>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Position</th>
                                            <th class="border-bottom-0">Office</th>
                                            <th class="border-bottom-0">Age</th>
                                            <th class="border-bottom-0">Start date</th>
                                            <th class="border-bottom-0">Salary</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2022/01/01</td>
                                            <td>$80,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jane Smith</td>
                                            <td>Database Administrator</td>
                                            <td>San Francisco</td>
                                            <td>45</td>
                                            <td>2015/08/12</td>
                                            <td>$120,000</td>
                                        </tr>

                                        <tr>
                                            <td>Alice Johnson</td>
                                            <td>Network Engineer</td>
                                            <td>Los Angeles</td>
                                            <td>35</td>
                                            <td>2018/03/17</td>
                                            <td>$95,000</td>
                                        </tr>

                                        <tr>
                                            <td>Robert Williams</td>
                                            <td>Project Manager</td>
                                            <td>Chicago</td>
                                            <td>40</td>
                                            <td>2016/09/30</td>
                                            <td>$150,000</td>
                                        </tr>

                                        <tr>
                                            <td>Michael Brown</td>
                                            <td>UI/UX Designer</td>
                                            <td>Miami</td>
                                            <td>28</td>
                                            <td>2019/05/22</td>
                                            <td>$85,000</td>
                                        </tr>

                                        <tr>
                                            <td>Emily Davis</td>
                                            <td>Data Scientist</td>
                                            <td>Seattle</td>
                                            <td>32</td>
                                            <td>2020/11/08</td>
                                            <td>$110,000</td>
                                        </tr>

                                        <tr>
                                            <td>Samuel Wilson</td>
                                            <td>Software Developer</td>
                                            <td>Denver</td>
                                            <td>29</td>
                                            <td>2021/07/14</td>
                                            <td>$90,000</td>
                                        </tr>

                                        <tr>
                                            <td>Mia Thompson</td>
                                            <td>Systems Analyst</td>
                                            <td>Dallas</td>
                                            <td>38</td>
                                            <td>2014/02/18</td>
                                            <td>$130,000</td>
                                        </tr>

                                        <tr>
                                            <td>David Miller</td>
                                            <td>IT Consultant</td>
                                            <td>Phoenix</td>
                                            <td>42</td>
                                            <td>2013/06/10</td>
                                            <td>$140,000</td>
                                        </tr>

                                        <tr>
                                            <td>Olivia Hall</td>
                                            <td>Security Specialist</td>
                                            <td>Atlanta</td>
                                            <td>34</td>
                                            <td>2017/12/04</td>
                                            <td>$115,000</td>
                                        </tr>

                                        <tr>
                                            <td>Christopher Lee</td>
                                            <td>DevOps Engineer</td>
                                            <td>Houston</td>
                                            <td>31</td>
                                            <td>2018/10/29</td>
                                            <td>$100,000</td>
                                        </tr>
                                        <tr>
                                            <td>Sophia Adams</td>
                                            <td>Business Analyst</td>
                                            <td>Toronto</td>
                                            <td>36</td>
                                            <td>2016/12/08</td>
                                            <td>$110,000</td>
                                        </tr>

                                        <tr>
                                            <td>William Turner</td>
                                            <td>Quality Assurance Tester</td>
                                            <td>Vancouver</td>
                                            <td>33</td>
                                            <td>2019/08/25</td>
                                            <td>$85,000</td>
                                        </tr>

                                        <tr>
                                            <td>Ava Martinez</td>
                                            <td>Full Stack Developer</td>
                                            <td>Montreal</td>
                                            <td>28</td>
                                            <td>2020/04/17</td>
                                            <td>$95,000</td>
                                        </tr>

                                        <tr>
                                            <td>Ethan Cooper</td>
                                            <td>Technical Writer</td>
                                            <td>Calgary</td>
                                            <td>29</td>
                                            <td>2021/11/02</td>
                                            <td>$80,000</td>
                                        </tr>

                                        <tr>
                                            <td>Madison Green</td>
                                            <td>Database Analyst</td>
                                            <td>Ottawa</td>
                                            <td>31</td>
                                            <td>2017/05/14</td>
                                            <td>$100,000</td>
                                        </tr>

                                        <tr>
                                            <td>Logan King</td>
                                            <td>Network Administrator</td>
                                            <td>Edmonton</td>
                                            <td>37</td>
                                            <td>2015/09/20</td>
                                            <td>$120,000</td>
                                        </tr>

                                        <tr>
                                            <td>Chloe Rivera</td>
                                            <td>UX/UI Designer</td>
                                            <td>Quebec City</td>
                                            <td>27</td>
                                            <td>2022/02/12</td>
                                            <td>$90,000</td>
                                        </tr>

                                        <tr>
                                            <td>Nathan Brooks</td>
                                            <td>Project Coordinator</td>
                                            <td>Winnipeg</td>
                                            <td>30</td>
                                            <td>2018/06/05</td>
                                            <td>$88,000</td>
                                        </tr>

                                        <tr>
                                            <td>Isabella Young</td>
                                            <td>Software Tester</td>
                                            <td>Saskatoon</td>
                                            <td>32</td>
                                            <td>2014/03/28</td>
                                            <td>$82,000</td>
                                        </tr>

                                        <tr>
                                            <td>James Clark</td>
                                            <td>IT Support Specialist</td>
                                            <td>Halifax</td>
                                            <td>34</td>
                                            <td>2013/09/15</td>
                                            <td>$95,000</td>
                                        </tr>
                                        <tr>
                                            <td>Emma Turner</td>
                                            <td>System Analyst</td>
                                            <td>Victoria</td>
                                            <td>33</td>
                                            <td>2018/11/22</td>
                                            <td>$105,000</td>
                                        </tr>

                                        <tr>
                                            <td>Lucas Perez</td>
                                            <td>Frontend Developer</td>
                                            <td>Regina</td>
                                            <td>29</td>
                                            <td>2019/07/14</td>
                                            <td>$92,000</td>
                                        </tr>

                                        <tr>
                                            <td>Grace Walker</td>
                                            <td>Business Intelligence Analyst</td>
                                            <td>Hamilton</td>
                                            <td>35</td>
                                            <td>2017/02/09</td>
                                            <td>$110,000</td>
                                        </tr>

                                        <tr>
                                            <td>Jackson Garcia</td>
                                            <td>Software Engineer</td>
                                            <td>Quebec</td>
                                            <td>31</td>
                                            <td>2020/05/30</td>
                                            <td>$98,000</td>
                                        </tr>

                                        <tr>
                                            <td>Lily Evans</td>
                                            <td>Data Analyst</td>
                                            <td>London</td>
                                            <td>28</td>
                                            <td>2021/10/18</td>
                                            <td>$88,000</td>
                                        </tr>

                                        <tr>
                                            <td>Matthew Brown</td>
                                            <td>Network Security Specialist</td>
                                            <td>Windsor</td>
                                            <td>36</td>
                                            <td>2016/04/02</td>
                                            <td>$115,000</td>
                                        </tr>

                                        <tr>
                                            <td>Aria Mitchell</td>
                                            <td>DevOps Engineer</td>
                                            <td>Calgary</td>
                                            <td>32</td>
                                            <td>2015/08/09</td>
                                            <td>$102,000</td>
                                        </tr>

                                        <tr>
                                            <td>Dylan Taylor</td>
                                            <td>IT Consultant</td>
                                            <td>Halifax</td>
                                            <td>37</td>
                                            <td>2014/01/25</td>
                                            <td>$125,000</td>
                                        </tr>

                                        <tr>
                                            <td>Zoe Richardson</td>
                                            <td>UX Designer</td>
                                            <td>St. John's</td>
                                            <td>30</td>
                                            <td>2019/03/12</td>
                                            <td>$95,000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- { File Export } end -->
                <!-- { Deleted Row DataTable } start -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Deleted Row DataTable</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <button id="button" class="btn btn-primary mb-4 data-table-btn">Delete selected row</button>
                                    <table id="delete-datatable" class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                        <tr>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Position</th>
                                            <th class="border-bottom-0">Office</th>
                                            <th class="border-bottom-0">Age</th>
                                            <th class="border-bottom-0">Start date</th>
                                            <th class="border-bottom-0">Salary</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Alice</td>
                                            <td>Johnson</td>
                                            <td>Web Designer</td>
                                            <td>2019/05/15</td>
                                            <td>$75,000</td>
                                            <td>alice.johnson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Bob</td>
                                            <td>Williams</td>
                                            <td>Software Engineer</td>
                                            <td>2020/02/28</td>
                                            <td>$85,000</td>
                                            <td>bob.williams@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Charlie</td>
                                            <td>Smith</td>
                                            <td>Data Analyst</td>
                                            <td>2018/09/10</td>
                                            <td>$70,000</td>
                                            <td>charlie.smith@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Diana</td>
                                            <td>Miller</td>
                                            <td>UX Designer</td>
                                            <td>2021/11/20</td>
                                            <td>$80,000</td>
                                            <td>diana.miller@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ethan</td>
                                            <td>Wilson</td>
                                            <td>Project Manager</td>
                                            <td>2017/06/05</td>
                                            <td>$95,000</td>
                                            <td>ethan.wilson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Alice</td>
                                            <td>Johnson</td>
                                            <td>Web Designer</td>
                                            <td>2019/05/15</td>
                                            <td>$75,000</td>
                                            <td>alice.johnson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Bob</td>
                                            <td>Williams</td>
                                            <td>Software Engineer</td>
                                            <td>2020/02/28</td>
                                            <td>$85,000</td>
                                            <td>bob.williams@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Charlie</td>
                                            <td>Smith</td>
                                            <td>Data Analyst</td>
                                            <td>2018/09/10</td>
                                            <td>$70,000</td>
                                            <td>charlie.smith@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Diana</td>
                                            <td>Miller</td>
                                            <td>UX Designer</td>
                                            <td>2021/11/20</td>
                                            <td>$80,000</td>
                                            <td>diana.miller@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ethan</td>
                                            <td>Wilson</td>
                                            <td>Project Manager</td>
                                            <td>2017/06/05</td>
                                            <td>$95,000</td>
                                            <td>ethan.wilson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona</td>
                                            <td>Evans</td>
                                            <td>Marketing Specialist</td>
                                            <td>2019/08/12</td>
                                            <td>$78,000</td>
                                            <td>fiona.evans@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin</td>
                                            <td>Harrison</td>
                                            <td>System Administrator</td>
                                            <td>2020/03/25</td>
                                            <td>$88,000</td>
                                            <td>gavin.harrison@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Holly</td>
                                            <td>Turner</td>
                                            <td>HR Coordinator</td>
                                            <td>2018/12/08</td>
                                            <td>$65,000</td>
                                            <td>holly.turner@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ian</td>
                                            <td>Porter</td>
                                            <td>Network Engineer</td>
                                            <td>2019/04/30</td>
                                            <td>$82,000</td>
                                            <td>ian.porter@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Jessica</td>
                                            <td>Lee</td>
                                            <td>Product Manager</td>
                                            <td>2020/07/17</td>
                                            <td>$90,000</td>
                                            <td>jessica.lee@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Kyle</td>
                                            <td>Roberts</td>
                                            <td>Quality Assurance Analyst</td>
                                            <td>2018/11/22</td>
                                            <td>$72,000</td>
                                            <td>kyle.roberts@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lisa</td>
                                            <td>Warren</td>
                                            <td>Content Writer</td>
                                            <td>2021/02/14</td>
                                            <td>$68,000</td>
                                            <td>lisa.warren@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Michael</td>
                                            <td>Baker</td>
                                            <td>IT Support Specialist</td>
                                            <td>2017/09/05</td>
                                            <td>$75,000</td>
                                            <td>michael.baker@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Natalie</td>
                                            <td>Cheng</td>
                                            <td>Customer Success Manager</td>
                                            <td>2019/12/10</td>
                                            <td>$88,000</td>
                                            <td>natalie.cheng@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Oscar</td>
                                            <td>Reyes</td>
                                            <td>Database Administrator</td>
                                            <td>2020/06/28</td>
                                            <td>$87,000</td>
                                            <td>oscar.reyes@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Paige</td>
                                            <td>Fletcher</td>
                                            <td>Graphic Designer</td>
                                            <td>2018/03/12</td>
                                            <td>$70,000</td>
                                            <td>paige.fletcher@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Quentin</td>
                                            <td>Stewart</td>
                                            <td>Business Analyst</td>
                                            <td>2019/09/19</td>
                                            <td>$80,000</td>
                                            <td>quentin.stewart@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Rachel</td>
                                            <td>Wong</td>
                                            <td>Technical Writer</td>
                                            <td>2021/01/25</td>
                                            <td>$72,000</td>
                                            <td>rachel.wong@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Samuel</td>
                                            <td>Harper</td>
                                            <td>IT Consultant</td>
                                            <td>2017/05/14</td>
                                            <td>$85,000</td>
                                            <td>samuel.harper@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Tina</td>
                                            <td>Nguyen</td>
                                            <td>Human Resources Specialist</td>
                                            <td>2019/11/30</td>
                                            <td>$75,000</td>
                                            <td>tina.nguyen@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>Product Manager</td>
                                            <td>2020/05/15</td>
                                            <td>$800,000</td>
                                            <td>john.doe@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Jane</td>
                                            <td>Smith</td>
                                            <td>UX Designer</td>
                                            <td>2019/04/22</td>
                                            <td>$600,000</td>
                                            <td>jane.smith@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Alice</td>
                                            <td>Johnson</td>
                                            <td>Software Engineer</td>
                                            <td>2018/11/10</td>
                                            <td>$700,000</td>
                                            <td>alice.johnson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Bob</td>
                                            <td>Anderson</td>
                                            <td>Data Analyst</td>
                                            <td>2017/08/05</td>
                                            <td>$550,000</td>
                                            <td>bob.anderson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Eva</td>
                                            <td>Miller</td>
                                            <td>Graphic Designer</td>
                                            <td>2016/03/18</td>
                                            <td>$480,000</td>
                                            <td>eva.miller@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Samuel</td>
                                            <td>Wong</td>
                                            <td>Frontend Developer</td>
                                            <td>2015/10/29</td>
                                            <td>$620,000</td>
                                            <td>samuel.wong@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Natalie</td>
                                            <td>Ryan</td>
                                            <td>Content Writer</td>
                                            <td>2018/07/21</td>
                                            <td>$540,000</td>
                                            <td>natalie.ryan@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>David</td>
                                            <td>Nguyen</td>
                                            <td>Network Administrator</td>
                                            <td>2017/04/14</td>
                                            <td>$670,000</td>
                                            <td>david.nguyen@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Sophie</td>
                                            <td>Turner</td>
                                            <td>Mobile App Developer</td>
                                            <td>2019/02/12</td>
                                            <td>$720,000</td>
                                            <td>sophie.turner@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Miles</td>
                                            <td>Perez</td>
                                            <td>Data Scientist</td>
                                            <td>2018/09/08</td>
                                            <td>$590,000</td>
                                            <td>miles.perez@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Isabella</td>
                                            <td>Clark</td>
                                            <td>UI/UX Designer</td>
                                            <td>2017/06/25</td>
                                            <td>$550,000</td>
                                            <td>isabella.clark@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Aiden</td>
                                            <td>Fletcher</td>
                                            <td>Software Tester</td>
                                            <td>2016/01/30</td>
                                            <td>$490,000</td>
                                            <td>aiden.fletcher@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Sophia</td>
                                            <td>Cooper</td>
                                            <td>Database Administrator</td>
                                            <td>2018/12/07</td>
                                            <td>$600,000</td>
                                            <td>sophia.cooper@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Oliver</td>
                                            <td>Williams</td>
                                            <td>SEO Specialist</td>
                                            <td>2017/11/14</td>
                                            <td>$520,000</td>
                                            <td>oliver.williams@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Emma</td>
                                            <td>Bennett</td>
                                            <td>Project Manager</td>
                                            <td>2016/08/18</td>
                                            <td>$680,000</td>
                                            <td>emma.bennett@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Jack</td>
                                            <td>Turner</td>
                                            <td>Technical Support</td>
                                            <td>2015/09/22</td>
                                            <td>$470,000</td>
                                            <td>jack.turner@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ava</td>
                                            <td>Fisher</td>
                                            <td>Marketing Specialist</td>
                                            <td>2019/10/11</td>
                                            <td>$580,000</td>
                                            <td>ava.fisher@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Elijah</td>
                                            <td>Harper</td>
                                            <td>Business Analyst</td>
                                            <td>2018/04/27</td>
                                            <td>$650,000</td>
                                            <td>elijah.harper@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Liam</td>
                                            <td>Williams</td>
                                            <td>Software Developer</td>
                                            <td>2019/08/10</td>
                                            <td>$720,000</td>
                                            <td>liam.williams@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia</td>
                                            <td>Johnson</td>
                                            <td>UX/UI Designer</td>
                                            <td>2018/06/05</td>
                                            <td>$620,000</td>
                                            <td>olivia.johnson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Noah</td>
                                            <td>Martin</td>
                                            <td>Product Manager</td>
                                            <td>2017/02/28</td>
                                            <td>$800,000</td>
                                            <td>noah.martin@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Emma</td>
                                            <td>Davis</td>
                                            <td>Frontend Developer</td>
                                            <td>2016/09/14</td>
                                            <td>$650,000</td>
                                            <td>emma.davis@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Aiden</td>
                                            <td>Anderson</td>
                                            <td>Data Analyst</td>
                                            <td>2015/11/20</td>
                                            <td>$580,000</td>
                                            <td>aiden.anderson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Sophia</td>
                                            <td>Thompson</td>
                                            <td>Marketing Specialist</td>
                                            <td>2014/07/02</td>
                                            <td>$700,000</td>
                                            <td>sophia.thompson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lucas</td>
                                            <td>Morris</td>
                                            <td>Database Administrator</td>
                                            <td>2013/04/16</td>
                                            <td>$670,000</td>
                                            <td>lucas.morris@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Isabella</td>
                                            <td>Gray</td>
                                            <td>SEO Specialist</td>
                                            <td>2012/01/10</td>
                                            <td>$550,000</td>
                                            <td>isabella.gray@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson</td>
                                            <td>Collins</td>
                                            <td>Business Analyst</td>
                                            <td>2011/07/25</td>
                                            <td>$640,000</td>
                                            <td>jackson.collins@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Mia</td>
                                            <td>Roberts</td>
                                            <td>Project Manager</td>
                                            <td>2010/03/15</td>
                                            <td>$760,000</td>
                                            <td>mia.roberts@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ethan</td>
                                            <td>Wilson</td>
                                            <td>Mobile App Developer</td>
                                            <td>2019/05/02</td>
                                            <td>$680,000</td>
                                            <td>ethan.wilson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Amelia</td>
                                            <td>Turner</td>
                                            <td>Graphic Designer</td>
                                            <td>2018/11/14</td>
                                            <td>$520,000</td>
                                            <td>amelia.turner@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>James</td>
                                            <td>Baker</td>
                                            <td>Network Administrator</td>
                                            <td>2017/08/20</td>
                                            <td>$630,000</td>
                                            <td>james.baker@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Ava</td>
                                            <td>Brooks</td>
                                            <td>Technical Support</td>
                                            <td>2016/04/05</td>
                                            <td>$480,000</td>
                                            <td>ava.brooks@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Logan</td>
                                            <td>Hughes</td>
                                            <td>SEO Specialist</td>
                                            <td>2015/12/10</td>
                                            <td>$570,000</td>
                                            <td>logan.hughes@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Harper</td>
                                            <td>Ramirez</td>
                                            <td>Content Writer</td>
                                            <td>2014/06/23</td>
                                            <td>$510,000</td>
                                            <td>harper.ramirez@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Benjamin</td>
                                            <td>Grayson</td>
                                            <td>Software Developer</td>
                                            <td>2013/03/08</td>
                                            <td>$670,000</td>
                                            <td>benjamin.grayson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lily</td>
                                            <td>McCarthy</td>
                                            <td>Frontend Developer</td>
                                            <td>2012/09/16</td>
                                            <td>$610,000</td>
                                            <td>lily.mccarthy@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Carter</td>
                                            <td>Robinson</td>
                                            <td>Data Analyst</td>
                                            <td>2011/04/30</td>
                                            <td>$540,000</td>
                                            <td>carter.robinson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Scarlett</td>
                                            <td>Stewart</td>
                                            <td>Marketing Specialist</td>
                                            <td>2010/10/14</td>
                                            <td>$700,000</td>
                                            <td>scarlett.stewart@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Henry</td>
                                            <td>Morris</td>
                                            <td>Database Administrator</td>
                                            <td>2019/02/18</td>
                                            <td>$640,000</td>
                                            <td>henry.morris@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Grace</td>
                                            <td>Adams</td>
                                            <td>SEO Specialist</td>
                                            <td>2018/07/05</td>
                                            <td>$560,000</td>
                                            <td>grace.adams@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Leo</td>
                                            <td>Chen</td>
                                            <td>Business Analyst</td>
                                            <td>2017/04/21</td>
                                            <td>$630,000</td>
                                            <td>leo.chen@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Stella</td>
                                            <td>Murphy</td>
                                            <td>Project Manager</td>
                                            <td>2016/01/14</td>
                                            <td>$760,000</td>
                                            <td>stella.murphy@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Connor</td>
                                            <td>Reid</td>
                                            <td>Mobile App Developer</td>
                                            <td>2015/08/29</td>
                                            <td>$690,000</td>
                                            <td>connor.reid@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Eva</td>
                                            <td>Roberts</td>
                                            <td>Content Writer</td>
                                            <td>2014/06/12</td>
                                            <td>$510,000</td>
                                            <td>eva.roberts@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lucas</td>
                                            <td>Johnson</td>
                                            <td>Software Developer</td>
                                            <td>2013/02/25</td>
                                            <td>$670,000</td>
                                            <td>lucas.johnson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Emily</td>
                                            <td>Reyes</td>
                                            <td>Frontend Developer</td>
                                            <td>2012/09/10</td>
                                            <td>$610,000</td>
                                            <td>emily.reyes@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Mason</td>
                                            <td>Lee</td>
                                            <td>Data Analyst</td>
                                            <td>2011/05/24</td>
                                            <td>$540,000</td>
                                            <td>mason.lee@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Aria</td>
                                            <td>Collins</td>
                                            <td>Marketing Specialist</td>
                                            <td>2010/11/08</td>
                                            <td>$700,000</td>
                                            <td>aria.collins@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Wyatt</td>
                                            <td>Morgan</td>
                                            <td>Mobile App Developer</td>
                                            <td>2019/05/17</td>
                                            <td>$680,000</td>
                                            <td>wyatt.morgan@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Scarlett</td>
                                            <td>Stewart</td>
                                            <td>Graphic Designer</td>
                                            <td>2018/11/02</td>
                                            <td>$520,000</td>
                                            <td>scarlett.stewart@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Grayson</td>
                                            <td>Roberts</td>
                                            <td>Network Administrator</td>
                                            <td>2017/08/17</td>
                                            <td>$630,000</td>
                                            <td>grayson.roberts@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lily</td>
                                            <td>Turner</td>
                                            <td>Technical Support</td>
                                            <td>2016/04/01</td>
                                            <td>$480,000</td>
                                            <td>lily.turner@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Logan</td>
                                            <td>Hughes</td>
                                            <td>SEO Specialist</td>
                                            <td>2015/12/15</td>
                                            <td>$570,000</td>
                                            <td>logan.hughes@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Harper</td>
                                            <td>Ramirez</td>
                                            <td>Content Writer</td>
                                            <td>2014/06/28</td>
                                            <td>$510,000</td>
                                            <td>harper.ramirez@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Benjamin</td>
                                            <td>Grayson</td>
                                            <td>Software Developer</td>
                                            <td>2013/03/13</td>
                                            <td>$670,000</td>
                                            <td>benjamin.grayson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Lily</td>
                                            <td>McCarthy</td>
                                            <td>Frontend Developer</td>
                                            <td>2012/09/21</td>
                                            <td>$610,000</td>
                                            <td>lily.mccarthy@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Carter</td>
                                            <td>Robinson</td>
                                            <td>Data Analyst</td>
                                            <td>2011/05/04</td>
                                            <td>$540,000</td>
                                            <td>carter.robinson@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Scarlett</td>
                                            <td>Stewart</td>
                                            <td>Marketing Specialist</td>
                                            <td>2010/10/18</td>
                                            <td>$700,000</td>
                                            <td>scarlett.stewart@example.com</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- { Deleted Row DataTable } end -->

            </div>
            <!--{ container end }-->
        </div>
    </div>
    <!--{ app content end }-->
@endsection
