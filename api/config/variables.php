<?php
$y = (int)date("Y",time()) + 543;
$m = (int)date("m",time());

$countries = array(
    "รัสเซีย",
    "แคนาดา",
    "สหรัฐอเมริกา",
    "จีน",
    "บราซิล",
    "ออสเตรเลีย",
    "อินเดีย",
    "อาร์เจนตินา",
    "คาซัคสถาน",
    "แอลจีเรีย",
    "สาธารณรัฐประชาธิปไตยคองโก",
    "กรีนแลนด์",
    "ซาอุดีอาระเบีย",
    "เม็กซิโก",
    "อินโดนีเซีย",
    "ซูดาน",
    "ลิเบีย",
    "อิหร่าน",
    "มองโกเลีย",
    "เปรู",
    "ชาด",
    "ไนเจอร์",
    "แองโกลา",
    "มาลี",
    "แอฟริกาใต้",
    "โคลอมเบีย",
    "เอธิโอเปีย",
    "โบลิเวีย",
    "มอริเตเนีย",
    "อียิปต์",
    "แทนซาเนีย",
    "ไนจีเรีย",
    "เวเนซุเอลา",
    "นามิเบีย",
    "โมซัมบิก",
    "ปากีสถาน",
    "ตุรกี",
    "ชิลี",
    "แซมเบีย",
    "พม่า",
    "อัฟกานิสถาน",
    "เซาท์ซูดาน",
    "ฝรั่งเศส",
    "โซมาเลีย",
    "สาธารณรัฐแอฟริกากลาง",
    "ยูเครน",
    "มาดากัสการ์",
    "บอตสวานา",
    "เคนยา",
    "เยเมน",
    "ไทย",
    "สเปน",
    "เติร์กเมนิสถาน",
    "แคเมอรูน",
    "ปาปัวนิวกินี",
    "สวีเดน",
    "อุซเบกิสถาน",
    "โมร็อกโก",
    "อิรัก",
    "ปารากวัย",
    "ซิมบับเว",
    "ญี่ปุ่น",
    "เยอรมนี",
    "สาธารณรัฐคองโก",
    "ฟินแลนด์",
    "เวียดนาม",
    "มาเลเซีย",
    "นอร์เวย์",
    "โกตดิวัวร์",
    "โปแลนด์",
    "โอมาน",
    "อิตาลี",
    "ฟิลิปปินส์",
    "บูร์กินาฟาโซ",
    "นิวซีแลนด์",
    "กาบอง",
    "เวสเทิร์นสะฮารา",
    "เอกวาดอร์",
    "กินี",
    "สหราชอาณาจักร",
    "ยูกันดา",
    "กานา",
    "โรมาเนีย",
    "ลาว",
    "กายอานา",
    "เบลารุส",
    "คีร์กีซสถาน",
    "เซเนกัล",
    "ซีเรีย",
    "กัมพูชา",
    "อุรุกวัย",
    "ตูนิเซีย",
    "ซูรินาเม",
    "เนปาล",
    "บังกลาเทศ",
    "ทาจิกิสถาน",
    "กรีซ",
    "นิการากัว",
    "เกาหลีเหนือ",
    "มาลาวี",
    "เอริเทรีย",
    "เบนิน",
    "ฮอนดูรัส",
    "ไลบีเรีย",
    "บัลแกเรีย",
    "คิวบา",
    "กัวเตมาลา",
    "ไอซ์แลนด์",
    "เกาหลีใต้",
    "ฮังการี",
    "โปรตุเกส",
    "จอร์แดน",
    "เฟรนช์เกียนา",
    "เซอร์เบีย",
    "อาเซอร์ไบจาน",
    "ออสเตรีย",
    "สหรัฐอาหรับเอมิเรตส์",
    "สาธารณรัฐเช็ก",
    "ปานามา",
    "เซียร์ราลีโอน",
    "ไอร์แลนด์",
    "จอร์เจีย",
    "ศรีลังกา",
    "ลิทัวเนีย",
    "ลัตเวีย",
    "สฟาลบาร์",
    "โตโก",
    "โครเอเชีย",
    "บอสเนียและเฮอร์เซโกวีนา",
    "คอสตาริกา",
    "สโลวาเกีย",
    "สาธารณรัฐโดมินิกัน",
    "ภูฏาน",
    "เอสโตเนีย",
    "เดนมาร์ก",
    "เนเธอร์แลนด์",
    "สวิตเซอร์แลนด์",
    "กินี-บิสเซา",
    "ไต้หวัน",
    "มอลโดวา",
    "เบลเยียม",
    "เลโซโท",
    "อาร์เมเนีย",
    "แอลเบเนีย",
    "หมู่เกาะโซโลมอน",
    "อิเควทอเรียลกินี",
    "บุรุนดี",
    "เฮติ",
    "รวันดา",
    "มาซิโดเนีย",
    "จิบูตี",
    "เบลีซ",
    "เอลซัลวาดอร์",
    "อิสราเอล",
    "สโลวีเนีย",
    "นิวแคลิโดเนีย",
    "ฟิจิ",
    "คูเวต",
    "สวาซิแลนด์",
    "ติมอร์-เลสเต",
    "บาฮามาส",
    "มอนเตเนโกร",
    "วานูอาตู",
    "หมู่เกาะฟอล์กแลนด์",
    "กาตาร์",
    "แกมเบีย",
    "จาเมกา",
    "เลบานอน",
    "ไซปรัส",
    "เปอร์โตริโก",
    "เฟรนช์เซาเทิร์นและแอนตาร์กติกเทร์ทอรีส์",
    "เวสต์แบงก์",
    "บรูไน",
    "ตรินิแดดและโตเบโก",
    "เฟรนช์โปลินีเซีย(ฝรั่งเศส)",
    "เคปเวิร์ด",
    "เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช",
    "ซามัว",
    "ลักเซมเบิร์ก",
    "เรอูว์นียง",
    "คอโมโรส",
    "มอริเชียส",
    "กัวเดอลุป",
    "หมู่เกาะแฟโร",
    "มาร์ตีนิก",
    "ฮ่องกง",
    "เซาตูเมและปรินซิปี",
    "คิริบาส",
    "โดมินิกา",
    "ตองกา",
    "ไมโครนีเซีย",
    "สิงคโปร์",
    "บาห์เรน",
    "เซนต์ลูเซีย",
    "เกาะแมน",
    "กวม",
    "หมู่เกาะนอร์เทิร์นมาเรียนา",
    "อันดอร์รา",
    "ปาเลา",
    "เซเชลส์",
    "คูราเซา",
    "แอนติกาและบาร์บูดา",
    "บาร์เบโดส",
    "หมู่เกาะเติกส์และหมู่เกาะเคคอส",
    "เกาะเฮิร์ดและหมู่เกาะแมกดอนัลด์",
    "เซนต์เฮเลนา",
    "เซนต์วินเซนต์และเกรนาดีนส์",
    "มายอต",
    "ยานไมเอน",
    "ฉนวนกาซา",
    "หมู่เกาะเวอร์จินของสหรัฐอเมริกา",
    "เกรเนดา",
    "มอลตา",
    "มัลดีฟส์",
    "หมู่เกาะวาลลิสและหมู่เกาะฟุตูนา",
    "หมู่เกาะเคย์แมน",
    "เซนต์คิตส์และเนวิส",
    "นีอูเอ",
    "แซงปีแยร์และมีเกอลง",
    "หมู่เกาะคุก",
    "อเมริกันซามัว",
    "อารูบา",
    "หมู่เกาะมาร์แชลล์",
    "ลิกเตนสไตน์",
    "หมู่เกาะบริติชเวอร์จิน",
    "เกาะคริสต์มาส",
    "เดเกเลีย",
    "อาโกรตีรี",
    "เจอร์ซีย์",
    "แองกวิลลา",
    "มอนต์เซอร์รัต",
    "เกิร์นซีย์",
    "ซานมารีโน",
    "บริติชอินเดียนโอเชียนเทร์ริทอรี",
    "เกาะบูเวต",
    "เบอร์มิวดา",
    "หมู่เกาะพิตแคร์น",
    "เกาะนอร์ฟอล์ก",
    "เกาะยูโรปา(ฝรั่งเศส)",
    "ตูวาลู",
    "มาเก๊า",
    "นาอูรู",
    "หมู่เกาะโคโคส(หมู่เกาะคีลิง)",
    "แพลไมราอะทอลล์",
    "โตเกเลา",
    "เกาะเวก",
    "หมู่เกาะมิดเวย์",
    "เกาะคลิปเพอร์ตัน",
    "เกาะนาวาสซา",
    "เกาะแอชมอร์และเกาะคาร์เทียร์",
    "หมู่เกาะโกลริโอโซ",
    "หมู่เกาะสแปรตลี",
    "เกาะจาร์วิส",
    "เกาะฮวนเดโนวา",
    "หมู่เกาะคอรัลซี",
    "จอห์นสตันอะทอลล์",
    "โมนาโก",
    "เกาะฮาวแลนด์",
    "เกาะเบเกอร์",
    "คิงแมนรีฟ",
    "เกาะตรอมแลง",
    "นครรัฐวาติกัน",
    "บัสซาสดาอินเดีย",
    "หมู่เกาะพาราเซล"
);

$provinces = array(
    "กระบี่",
    "กรุงเทพมหานคร",
    "กาญจนบุรี",
    "กาฬสินธุ์",
    "กำแพงเพชร",
    "ขอนแก่น",
    "จันทบุรี",
    "ฉะเชิงเทรา",
    "ชลบุรี",
    "ชัยนาท",
    "ชัยภูมิ",
    "ชุมพร",
    "เชียงราย",
    "เชียงใหม่",
    "ตรัง",
    "ตราด",
    "ตาก",
    "นครนายก",
    "นครปฐม",
    "นครพนม",
    "นครราชสีมา",
    "นครศรีธรรมราช",
    "นครสวรรค์",
    "นนทบุรี",
    "นราธิวาส",
    "น่าน",
    "บึงกาฬ",
    "บุรีรัมย์",
    "ปทุมธานี",
    "ประจวบคีรีขันธ์",
    "ปราจีนบุรี",
    "ปัตตานี",
    "พระนครศรีอยุธยา",
    "พะเยา",
    "พังงา",
    "พัทลุง",
    "พิจิตร",
    "พิษณุโลก",
    "เพชรบุรี",
    "เพชรบูรณ์",
    "แพร่",
    "ภูเก็ต",
    "มหาสารคาม",
    "มุกดาหาร",
    "แม่ฮ่องสอน",
    "ยโสธร",
    "ยะลา",
    "ร้อยเอ็ด",
    "ระนอง",
    "ระยอง",
    "ราชบุรี",
    "ลพบุรี",
    "ลำปาง",
    "ลำพูน",
    "เลย",
    "ศรีสะเกษ",
    "สกลนคร",
    "สงขลา",
    "สตูล",
    "สมุทรปราการ",
    "สมุทรสงคราม",
    "สมุทรสาคร",
    "สระแก้ว",
    "สระบุรี",
    "สิงห์บุรี",
    "สุโขทัย",
    "สุพรรณบุรี",
    "สุราษฎร์ธานี",
    "สุรินทร์",
    "หนองคาย",
    "หนองบัวลำภู",
    "อ่างทอง",
    "อำนาจเจริญ",
    "อุดรธานี",
    "อุตรดิตถ์",
    "อุทัยธานี",
    "อุบลราชธานี"
);

$months = array(
    "มกราคม",
    "กุมภาพันธ์",
    "มีนาคม",
    "เมษายน",
    "พฤษพาคม",
    "มิถุนายน",
    "กรกฎาคม",
    "สิงหาคม",
    "กันยายน",
    "ตุลาคม",
    "พฤศจิกายน",
    "ธันวาคม"
);

$years = array(
);
for($i=0;$i<10;$i++){
    $years[count($years)] = (int) ($y - $i);
}

$occupations = array(
    "ประชาชนทั่วไป",
    "นักเรียน/นักศึกษา",
    "เกษตรกร",
    "สื่อมวลชน",
    "ข้าราชการ",
    "ชาวต่างชาติ"
);

$rooms = array(
    "หน่วยงานพัฒนาที่ดิน",
    "หน่วยงานพัฒนาชุมชน",
    "หน่วยงานส่งเสริม",
    "หน่วยงานสมุนไพร"
);

$meeting_rooms = array(
    "ห้องประชุมพอเพียง",
    "ห้องประชุมปราชญ์วิถี",
    "ห้องประชุมศิลา"
);

$activities = array(
    "ฟังประวัติความเป็นมา",
    "นั่งรถศึกษาดูงาน",
    "เกษตรทฤษฎีใหม่",
    "งานพัฒนาชุมชน",
    "งานประมง",
    "ฐานเพาะชำมะนาว",
    "ฐานปลูกผักไฮโดรโพรนิก",
    "การเพาะเลี้ยงจิ้งหรีด",
    "การเพาะเห็ด",
    "การทำปุ๋ยหมักชีวภาพ/น้ำหมักชีวภาพ",
    "ปศุสัตว์",
    "1 ไร่พอเพียง",
    "เพาะชำกล้าไม้",
    "สมุนไพร",
    "แปรรูปยาหม่อง",
    "แปรรูปน้ำยาล้างจาน",
    "แปรรูปสบู่",
    "แปรรูปลูกประคบสมุนไพร",
    "แปรรูปน้ำมันไพร",
    "แปรรูปขนมไทย",
    "แปรรูปน้ำสมุนไพร",
    "แปรรูปยาหม่องน้ำ",
    "แปรรูปพิมเสนน้ำ",
    "แปรรูปยาดมโบราณ",
    "แปรรูปน้ำมันเขียวเย็นสมุนไพร",
    "แปรูปน้ำมันเหลือง",
    "แปรรูปลิค",
    "แปรรูลิปบาล์ม",
    "แปรูปสบู่ซักผ้าขาว",
    "แปรรูปสบู่ซักล้างจากน้ำมันทำอาหารเหลือใช้",
    "แปรรูปแชมพูสมุนไพร",
    "แปรรรูปสเปย์ไล่ยุ่งจากสมุนไพร",
    "แปรรูปครีมตะไคร้หอมกันยุง",
    "แปรรูปน้ำยาเอนกประสงค์",
    "แปรรูปโลชั่น"
);

$thMonth = $months[$m-1];
$js_rooms = json_encode($rooms);

if (isset($_GET['var']) && !empty($_GET['var'])){
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET");
    header("AccessControl-Allow-Credentials: true");
    header("Content-Type: application/json");
    switch ($_GET['var']){
        case 'rooms':
            echo json_encode($rooms);
            break;
    }
}

?>