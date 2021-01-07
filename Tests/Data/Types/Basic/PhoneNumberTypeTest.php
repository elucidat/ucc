<?php

namespace Ucc\Tests\Data\Types\Basic;

use \PHPUnit_Framework_TestCase as TestCase;
use Ucc\Data\Types\Basic\PhoneNumberType;

class PhoneNumberTypeTest extends TestCase
{
    public function testGetRequirementsOptions()
    {
        $this->assertTrue(is_array(PhoneNumberType::getRequirementsOptions()));
    }

    public function validPhoneNumberProvider()
    {
        return array(
            array('+447877775529'),
            array('+437877775529'),
            array('00447877775529', '+447877775529'),
            array('+12555296540', '+12555296540'),
            array('0012555296540', '+12555296540'),
            array('+33516598974', '+33516598974'),
            array('0033516598974', '+33516598974'),
            array('00385948741235', '+385948741235'),
            array('00359948741231', '+359948741231'),
            array('0032123456789874', '+32123456789874'),
            array('00321234567898', '+321234567898'),
            array('0035726545238', '+35726545238'),
            array('0035792654789', '+35792654789'),
            array('00420522336655', '+420522336655'),
            array('00420602888999', '+420602888999'),
            array('004520998877', '+4520998877'),
            array('003727992222', '+3727992222'),
            array('0037279922222', '+37279922222'),
            array('00358471234567', '+358471234567'),
            array('00358501235', '+358501235'),
            array('0035020052200', '+35020052200'),
            array('00302123456789', '+302123456789'),
            array('00366123456789', '+366123456789'),
            array('00361234567', '+361234567'),
            array('003546121234', '+3546121234'),
            array('0035431212317', '+35431212317'),
            array('00353891234567', '+353891234567'),
            array('0035389123456', '+35389123456'),
            array('0037121212123', '+37121212123'),
            array('004231234567', '+4231234567'),
            array('0037052102222', '+37052102222'),
            array('00352412312', '+352412312'),
            array('+352691000700'),
            array('004791212123', '+4791212123'),
            array('0047591123123123', '+47591123123123'),
            array('0048121231212', '+48121231212'),
            array('+48121231212'),
            array('00351912123123', '+351912123123'),
            array('+351912123123'),
            array('0040123456789', '+40123456789'),
            array('+40123456789'),
            array('00421112345678', '+421112345678'),
            array('+421112345678'),
            array('0038611231212', '+38611231212'),
            array('+38611231212'),
            array('00461421231231231', '+461421231231231'),
            array('+461421231231231'),
            array('+41121231212'),
            array('0041121231212', '+41121231212'),
            array('+94779660448'),
            array('0094779660448', '+94779660448'),
            array('+905455351429'),
            array('00905455351429', '+905455351429'),
            array('+996323123456'),
            array('00996323123456', '+996323123456'),
            array('+919600017826'),
            array('00919600017826', '+919600017826'),
            array('+971552539371'),
            array('00971552539371', '+971552539371'),
            array('+923139646714'),
            array('+923332216990'),
            array('00923139646714', '+923139646714'),
            array('+966503425899'),
            array('00966503425899', '+966503425899'),
            array('+982126109946'),
            array('00982126109946', '+982126109946'),
            array('+8801799007996'),
            array('008801799007996', '+8801799007996'),
            array('+6597268955'),
            array('006597268955', '+6597268955'),
            array('+249912570643'),
            array('00249912570643', '+249912570643'),
            array('+23411234569'),
            array('+2348033812199'),
            array('002348033812199', '+2348033812199'),
            array('+201002592204'),
            array('00201227729272', '+201227729272'),
            array('+27814555530'),
            array('0027814555530', '+27814555530'),
            array('+26461274800'),
            array('0026461274800', '+26461274800'),
            array('+264121231234'),
            array('00264121231234', '+264121231234'),
            array('+9747111111'),
            array('009747111111', '+9747111111'),
            array('+97455210036'),
            array('0097455210036', '+97455210036'),
            array('+21676226708'),
            array('0021676226708', '+21676226708'),
            array('+81744541234'),
            array('0081744541234', '+81744541234'),
            array('+819017901351'),
            array('00819017901351', '+819017901351'),
            array('+821212345678'),
            array('00821212345678', '+821212345678'),
            array('+8250212334'),
            array('008250212334', '+8250212334'),
            array('+82502123345'),
            array('0082502123345', '+82502123345'),
            array('+8486942131'),
            array('008486942131', '+8486942131'),
            array('+84121234567'),
            array('0084121234567', '+84121234567'),
            array('+841212345671'),
            array('00841212345671', '+841212345671'),
            array('+8412312345678'),
            array('008412312345678', '+8412312345678'),
            array('+8612312341234'),
            array('008612312341234', '+8612312341234'),
            array('+861231231234'),
            array('00861231231234', '+861231231234'),
            array('+85258031814'),
            array('0085258031814', '+85258031814'),
            array('+85312341234'),
            array('0085312341234', '+85312341234'),
            array('+85570561642'),
            array('0085570561642', '+85570561642'),
            array('+855121234567'),
            array('00855121234567', '+855121234567'),
            array('+85621222238'),
            array('0085621222238', '+85621222238'),
            array('+8562091473699'),
            array('008562091473699', '+8562091473699'),
            array('+88689891329'),
            array('0088689891329', '+88689891329'),
            array('+886422268787'),
            array('00886422268787', '+886422268787'),
            array('+93790000541'),
            array('0093790000541', '+93790000541'),
            array('+9379123123'),
            array('009379123123', '+9379123123'),
            array('+95644014'),
            array('0095644014', '+95644014'),
            array('+959255524423'),
            array('00959255524423', '+959255524423'),
            array('+9607820454'),
            array('009607820454', '+9607820454'),
            array('+96179178175'),
            array('0096179178175', '+96179178175'),
            array('+9611972000'),
            array('009611972000', '+9611972000'),
            array('+96265555555'),
            array('0096265555555', '+96265555555'),
            array('+962777588235'),
            array('00962777588235', '+962777588235'),
            array('+963945857421'),
            array('00963945857421', '+963945857421'),
            array('+96352317379'),
            array('0096352317379', '+96352317379'),
            array('+9647811575763'),
            array('009647811575763', '+9647811575763'),
            array('+964781157576'),
            array('00964781157576', '+964781157576'),
            array('+9651888666'),
            array('009651888666', '+9651888666'),
            array('+96523983824'),
            array('0096523983824', '+96523983824'),
            array('+9677512549'),
            array('009677512549', '+9677512549'),
            array('+967733089354'),
            array('00967733089354', '+967733089354'),
            array('+96824231970'),
            array('0096824231970', '+96824231970'),
            array('+97082854947'),
            array('0097082854947', '+97082854947'),
            array('+970591231234'),
            array('00970591231234', '+970591231234'),
            array('+97246937176'),
            array('0097246937176', '+97246937176'),
            array('+972559661631'),
            array('00972559661631', '+972559661631'),
            array('+97317713000'),
            array('0097317713000', '+97317713000'),
            array('+9752336699'),
            array('009752336699', '+9752336699'),
            array('+97577420997'),
            array('0097577420997', '+97577420997'),
            array('+97699479636'),
            array('0097699479636', '+97699479636'),
            array('+97714123123'),
            array('0097714123123', '+97714123123'),
            array('+9779852672008'),
            array('009779852672008', '+9779852672008'),
            array('+992902709339'),
            array('00992902709339', '+992902709339'),
            array('+99365555512'),
            array('0099365555512', '+99365555512'),
            array('+994506149985'),
            array('00994506149985', '+994506149985'),
            array('+995591403096'),
            array('00995591403096', '+995591403096'),
            array('+77753437009'),
            array('0077753437009', '+77753437009'),
            array('+998912581616'),
            array('00998912581616', '+998912581616'),
            array('+51960688161'),
            array('0051960688161', '+51960688161'),
            array('+526699840233'),
            array('00526699840233', '+526699840233'),
            array('+5352329762'),
            array('005352329762', '+5352329762'),
            array('+541146010287'),
            array('00541146010287', '+541146010287'),
            array('+56975215330'),
            array('0056975215330', '+56975215330'),
            array('+5718000423703'),
            array('005718000423703', '+5718000423703'),
            array('+582852059770'),
            array('00582852059770', '+582852059770'),
            array('+50021071'),
            array('0050021071', '+50021071'),
            array('+5012231770'),
            array('005012231770', '+5012231770'),
            array('+50254508089'),
            array('0050254508089', '+50254508089'),
        );
    }

    public function invalidPhoneNumberProvider()
    {
        return array(
            array('789787878778787'),
            array('00448787897878787877878787'),
            array('abc 123'),
            array('07877559988'),
            array('98777777777'),
            array('+6622345'),
            array('+6612234556'),
            array('+6622345678948'),
            array('+4407877552287'),
            array('+44787755228899'),
            array('+447877'),
            array('+335165989744'),
            array('+3351659897'),
            array('+328796541'),
            array('+321234567898741'),
            array('+32 12 34 56 78 98'),
            array('+32(0)123-4567 898'),
            array('+3579265478'),
            array('+357926547888'),
            array('+35712654789'),
            array('+42052233665'),
            array('+4205223366551'),
            array('+420922336655'),
            array('+452099887'),
            array('+45209988778'),
            array('+372799222'),
            array('+372799222222'),
            array('+3721992222'),
            array('+3584712345678'),
            array('+35850123'),
            array('+350200522001'),
            array('+3502005220'),
            array('+3021234567'),
            array('+3021234567890'),
            array('+309123456789'),
            array('+3661234567891'),
            array('+36123456'),
            array('+3602345678'),
            array('+354612123'),
            array('+35261212'),
            array('+3538912345'),
            array('+3531212312345'),
            array('+353321231234'),
            array('+3712121212'),
            array('+371212121234'),
            array('+423123456'),
            array('+42312345678'),
            array('+3705210222'),
            array('+370521022222'),
            array('+35241231'),
            array('+3526910007001'),
            array('+479121212'),
            array('+475911231231231'),
            array('+47191123123123'),
            array('+47491123123123'),
            array('+4812123121'),
            array('+481212312112'),
            array('+35191212312'),
            array('+3519121231234'),
            array('+4012345678'),
            array('+401234567812'),
            array('+42111234567'),
            array('+4211123456789'),
            array('+3861123121'),
            array('+386112312123'),
            array('+4614212312312312'),
            array('+46142123'),
            array('+4112123121'),
            array('+411212312121'),
            array('+9477966044'),
            array('+947796604411'),
            array('+90545535142'),
            array('+9054553514291'),
            array('+99632312345'),
            array('+9963231234561'),
            array('+91960001782'),
            array('+9196000178261'),
            array('+9718525393'),
            array('+971852539371'),
            array('+9718525393712'),
            array('+9233322169902'),
            array('+92333221699'),
            array('+9665034258989'),
            array('+96650342589'),
            array('+9821261099468'),
            array('+98212610994'),
            array('+88018295375'),
            array('+65972689550'),
            array('+659726895'),
            array('+2499125706433'),
            array('+24991257064'),
            array('+249812570643'),
            array('+23480338121999'),
            array('+2341123456'),
            array('+2010025922041'),
            array('+20100259220'),
            array('+2781455553'),
            array('+27814555530123'),
            array('+2641212312341'),
            array('+2641212312'),
            array('+974552100364'),
            array('+97455'),
            array('+216762267084'),
            array('+216762267'),
            array('+8190179013'),
            array('+81901790135123'),
            array('+810017901351'),
            array('+825021233'),
            array('+82502123345123'),
            array('+84123123456781'),
            array('+848694213'),
            array('+8612312312'),
            array('+86123123123456'),
            array('+852580318145'),
            array('+8525803181'),
            array('+8531234123'),
            array('+853123412345'),
            array('+8557056164'),
            array('+8557056164234'),
            array('+8562122223'),
            array('+85621222238999'),
            array('+8868989132'),
            array('+8868989132921'),
            array('+937912312'),
            array('+937900005411'),
            array('+9592555244231'),
            array('+9564401'),
            array('+959 564 5330'),
            array('+96078204541'),
            array('+960782045'),
            array('+961197200'),
            array('+961197200012'),
            array('+9627775882351'),
            array('+9627775882'),
            array('+963655555'),
            array('+9631422201234'),
            array('+96479033168601'),
            array('+965239838241'),
            array('+965188866'),
            array('+967751254'),
            array('+9677330893541'),
            array('+968244869571'),
            array('+9708285494'),
            array('+9705912312345'),
            array('+9724693717'),
            array('+9725112312341'),
            array('+9737777001'),
            array('+973777700112'),
            array('+975233669'),
            array('+975774209971'),
            array('+9769947963'),
            array('+976994796361'),
            array('+9771412312'),
            array('+97798526720081'),
            array('+99293827505'),
            array('+9929382750501'),
            array('+9934312272'),
            array('+993431227271'),
            array('+99450614998'),
            array('+9945061499851'),
            array('+99559140309'),
            array('+9955914030961'),
            array('+7775343700'),
            array('+99861444220'),
            array('+9986144422031'),
            array('+5112345'),
            array('+5196068816155'),
            array('+5280046'),
            array('+5255526530001'),
            array('+53534286121235'),
            array('+535232'),
            array('+542964525141123'),
            array('+54296452'),
            array('+569752153'),
            array('+5697521533012'),
            array('+573202127760123'),
            array('+5732021'),
            array('+5828520597701'),
            array('+58285205977'),
            array('+5004206'),
            array('+500420621'),
            array('+50162500111'),
            array('+501625001'),
            array('+5027767115'),
            array('+502776711512'),
        );
    }

    /**
     * @dataProvider    validPhoneNumberProvider
     */
    public function testCheckPass($phone, $expected = null)
    {
        if (is_null($expected)) {
            $expected = $phone;
        }

        $this->assertEquals(PhoneNumberType::check($expected), $phone);
    }

    /**
     * @dataProvider    validPhoneNumberProvider
     */
    public function testIsPass($phone)
    {
        $this->assertTrue(PhoneNumberType::is($phone));
    }

    /**
     * @dataProvider    invalidPhoneNumberProvider
     * @expectedException Ucc\Exception\Data\InvalidDataValueException
     */
    public function testCheckFail($phone)
    {
        $this->assertEquals(PhoneNumberType::check($phone), $phone);
    }

    /**
     * @dataProvider    invalidPhoneNumberProvider
     */
    public function testIsFail($phone)
    {
        $this->assertFalse(PhoneNumberType::is($phone));
    }
}
