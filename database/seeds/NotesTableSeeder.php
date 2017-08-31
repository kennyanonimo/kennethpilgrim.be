<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert(['category_id'=>'10','title'=>'Responsive background','note'=>'background: $background;<br>background-size: cover;<br>background-position: center;<br>background-attachment: fixed;<br>background-repeat: no-repeat;']);
        DB::table('notes')->insert(['category_id'=>'10','title'=>'Collapse navbars sooner','note'=>'@media (min-width: 768px) and (max-width: 800px) {<br>    .navbar-collapse.collapse {<br>        display: none !important;<br>    }<br>    .navbar-collapse.collapse.in {<br>        display: block !important;<br>    }<br>    .navbar-header .collapse,<br>    .navbar-toggle {<br>        display:block !important;<br>    }<br>    .navbar-header {<br>        float:none;<br>    }<br>}']);
        DB::table('notes')->insert(['category_id'=>'10','title'=>'Keep footer collapsed to button','note'=>'@media only screen and (max-width: 2000px) {<br>    #kpFooter .navbar-header {<br>        float: none;<br>    }<br>    #kpFooter .navbar-left,<br>    #kpFooter .navbar-right {<br>        float: none !important;<br>    }<br>    #kpFooter .navbar-toggle {<br>        display: block;<br>    }<br>    #kpFooter .navbar-collapse {<br>        border-top: 1px solid transparent;<br>        box-shadow: $boxShadow;<br>    }<br>    #kpFooter .navbar-fixed-top {<br>        top: 0;<br>        border-width: 0 0 1px;<br>    }<br>    #kpFooter .navbar-collapse.collapse {<br>        display: none!important;<br>    }<br>    #kpFooter .navbar-nav {<br>        float: none!important;<br>        margin-top: 7.5px;<br>    }<br>    #kpFooter .navbar-nav>li {<br>        float: none;<br>    }<br>    #kpFooter .navbar-nav>li>a {<br>        padding-top: $footerPadding;<br>        padding-bottom: $footerPadding;<br>    }<br>    #kpFooter .collapse.in{<br>        display:block !important;<br>    }<br>}']);
        DB::table('notes')->insert(['category_id'=>'10','title'=>'Remove breakpoints','note'=>'HTML:<br><br class="break"/><br>CSS:<br>@media only screen and (max-width:780px) {<br>    .break {<br>        display: none;<br>    }<br>}']);
        DB::table('notes')->insert(['category_id'=>'10','title'=>'FIX: remove select box outline in firefox','note'=>'select:-moz-focusring {<br>    color: transparent;<br>    text-shadow: 0 0 0 #000;<br>}']);
        DB::table('notes')->insert(['category_id'=>'10','title'=>'FIX: remove standard dropdown arrow','note'=>'select {<br>    -moz-appearance: none;<br>    text-indent: 0.01px;<br>    text-overflow: \'\';<br>}']);
        DB::table('notes')->insert(['category_id'=>'10','title'=>'FIX: Set input-placeholder color to textcolor','note'=>'::-webkit-input-placeholder {<br>    color: $textColor;<br>}<br>:-moz-placeholder {<br>    color: $textColor;<br>    opacity: 1;<br>}<br>::-moz-placeholder {<br>    color: $textColor;<br>    opacity: 1;<br>}<br>:-ms-input-placeholder {<br>    color: $textColor;<br>}<br>::-ms-input-placeholder {<br>    color: $textColor;<br>}']);
    }
}
