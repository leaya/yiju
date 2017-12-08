<template>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered nobottommargin">
                <tbody>
                <tr >
                    <td colspan=2>评分标准</td>
                    <td>CRS</td>
                    <td>六项打分</td>
                </tr>
                <tr >
                    <td >婚姻</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr >
                    <td colspan=4>A. 核心/人力资本因素 Core / human capital factors</td>
                </tr>
                <tr >
                    <td >年龄</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr >
                    <td rowspan=8>学历</td>
                    <td><label><input type="radio" value ="0" name="ques03" v-model="eduSelect"/> 高中以下</label></td>
                    <td rowspan=8>0</td>
                    <td rowspan=8>{{computedEdu}}</td>
                </tr>
                <tr >
                    <td><label><input type="radio" value ="1" name="ques03" v-model="eduSelect"/> 高中</label></td>
                </tr>
                <tr >
                    <td><label><input type="radio" value ="2" name="ques03"/> 1年大专</label></td>
                </tr>
                <tr >
                    <td><label><input type="radio" value ="3" name="ques03"/> 2年大专</label></td>
                </tr>
                <tr >
                    <td><label><input type="radio" value ="4" name="ques03"/> 3年以上大专或本科</label></td>
                </tr>
                <tr >
                    <td><label><input type="radio" value ="5" name="ques03"/> 双专业（3年以上大专或本科+至少一年的大专）</label></td>
                </tr>
                <tr >
                    <td><label><input type="radio" value ="6" name="ques03"/> 硕士学位或者专业学位（医学博士、法学博士等）</label></td>
                </tr>
                <tr >
                    <td><label><input type="radio" value ="7" name="ques03"/> 博士学位</label></td>
                </tr>
                <tr >
                    <td rowspan=5>第一语言</td>
                    <td> </td>
                    <td rowspan=5></td>
                    <td rowspan=5></td>
                </tr>
                <tr >
                    <td> </td>
                </tr>
                <tr >
                    <td> </td>
                </tr>
                <tr >
                    <td> </td>
                </tr>
                <tr >
                    <td class=x29>雅思</td>
                </tr>
                <tr >
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr >
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr >
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr >
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr >
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                eduSelect: '',
                eduscore: [
                    new Array(0,0,0,0),
                    new Array(28,30,2,5),
                    new Array(84,90,6,15),
                    new Array(91,98,7,19),
                    new Array(112,120,8,21),
                    new Array(119,128,9,22),
                    new Array(126,135,10,23),
                    new Array(140,150,10,25),
                ],
            }
        },
        computed: {
            computedEdu(){
                return this.eduSelect;
            },
        },
        mounted() {
        }
    }
</script>
