<!--ҳͷ������Դ����-->
<? include("../common/head.php"); ?>

<!--
    ��Ҫ���Ե�dom�ṹ��ע�⣬�����<div class="J_TScriptedModule" data-componentid="uniqueSign"> ��class��Ϊ���Բ����޸�
    �û���javascript������ֻ�������õ����dom���棬������"Խ��"
-->

<div id="dom-test" data-componentid="uniqueSign" class="J_TScriptedModule">
    <div class="top-authbtn-container top-login-btn-container"></div>
    <!--    <div id="mapDiv" style="width:800px;height:600px"></div>-->
    <a>test1</a>
    <a>test2</a>
    <input type="text" value="landao" class="inputcls">
    <div class="dom-father">
        <div class="dom-child1"></div>
        <div class="dom-child2"></div>
    </div>
    <div class="kissy-dom">
        <input class="inp1" name="inp1_na" type="text"/>
        <input class="inp2" name="inp2_na" type="checkbox"/>
    </div>
    <div class="select-dom">
        <label>
            <select class='selt'>
                <option value='one'>1</option>
                <option selected>2</option>
            </select>
        </label>
    </div>
    <div class="inner">1111</div>
    <div class="rep-father">
        <div class="rep-child1"></div>
        <div class="rep-child2"></div>
    </div>

    <!--    <input type="text" class="J_Calendar" name="sdfu7"/>-->
    <!---->
    <!--    <input type="text" id="J_AucTitle" name="item-title" value="����">-->
    <!--    <div id="J_LimiterWrapper"></div>-->
</div>

<!--ģ���ʼ���İ����ã�������Ϥ��-->
<script type="text/javascript">
    KISSY.config(
        {
            debug: false,
            packages: [
                {
                    name: "openjs", //����
                    tag: "20130527",//ʱ���, �����ڶ�̬�ű�·������, ���ڸ��°���ģ�����
                    path: "../../assets", //����Ӧ·��, ���·��ָ����ڵ�ǰҳ��·��    //
                    charset: "utf-8" //����ģ���ļ������ʽ
                }
            ]
        }
    );
    cajaConfig = {//����������Ҫ�����ģ�����ƣ����ᱻuse��
        module: "openjs/1.3.0/core"
    }

</script>

<!--�����ǽ��Լ���js�÷���˱���һ�£������·���˵�php·�����Լ���js���ɣ�ע��·��-->
<?
$jsurl = "testcase/1.3.0/baseapi.js"; //ע��·��
$jsservice = "../common/cajoled_service.php"; //ע��·��
include("../common/foot.php"); //����foot
?>
