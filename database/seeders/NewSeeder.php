<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'id'=> 1,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'

            ],
            [
                'id'=> 2,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 3,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> '',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 4,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 5,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 6,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 7,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 8,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 9,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 10,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 11,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 12,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 13,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 14,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 15,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 16,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 17,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 18,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 19,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
            [
                'id'=> 20,
                'name'=> 'VinHomes Grand Park',
                'address'=> 'S3.05 Vinhomes Grand Park, Nguyễn Xiển, Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh 700000',
                'price'=> '2,8 tỷ/căn',
                'generalInformation'=> 'Ha Noi',
                'details'=> 'sở hữu vị trí đắc địa với địa thế phong thủy sinh vượng khí, tài lộc, 3 mặt giáp sông, nằm ven Sông Đồng Nai và một phần Sông Tắc giúp điều tiết khí hậu, nhờ vậy cư dân sống tại đây có thể tận hưởng 1 bầu không khí trong lành và mát mẻ.',
                'ava'=> 'https://vincityquan9.edu.vn/wp-content/uploads/2019/06/Vinhomes-Grand-Park-Phoi-Canh-Cong-Vien.jpg',
                'status'> 'Cho thuê'
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
