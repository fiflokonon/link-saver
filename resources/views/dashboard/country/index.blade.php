@extends('dashboard.index')
@section('title', 'Countries')
@section('content')
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
@endsection
