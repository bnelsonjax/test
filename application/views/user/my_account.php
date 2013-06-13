    <div id="content">
        <h3>My Account</h3>
        <div class="innerLR">
            <!-- Widget -->

            <div class="widget widget-tabs widget-tabs-double-2 border-bottom-none">
                <!-- Widget heading -->

                <div class="widget-head border-bottom">
                    <ul>
                        <li class="active">
                            <a class="glyphicons display" data-toggle="tab" href="#overview"><em></em>Overview</a>
                        </li>

                        <li>
                            <a class="glyphicons edit" data-toggle="tab" href="#edit-account"><em></em>Edit account</a>
                        </li>

                        <li>
                            <a class="glyphicons luggage" data-toggle="tab" href="#projects"><em></em>Projects</a>
                        </li>
                    </ul>
                </div><!-- // Widget heading END -->

                <div class="widget-body">
                    <form class="form-horizontal" style="margin: 0;">
                        <div class="tab-content" style="padding: 0;">
                            <!-- Tab 1 -->
                            <div class="tab-pane active widget-body-regular padding-none-TB" id="overview">
                            <? include("overview.php"); ?>
                            </div>
                            <!-- Tab 1 END-->
                            <!-- Tab 2 -->
                            <div class="tab-pane widget-body-regular" id="edit-account">
                             <? include("edit.php"); ?>
                            </div>
                            <!-- // Tab 2 END -->
                            <!-- Tab 3 -->
                            <div class="tab-pane widget-body-regular" id="projects">
                             <? include("tab3.php"); ?>
                            </div>
                            <!-- // Tab 3 END -->
                        </div>
                    </form>
                </div>
            </div><!-- // Widget END -->
        </div>
    </div>