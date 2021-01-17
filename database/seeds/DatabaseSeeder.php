<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('LoaiNguoiDung')->insert(
            [
                'tenLoai' => 'admin',
            ],
            [
                'tenLoai' => 'qtv',
            ],
            [
                'tenLoai' => 'nhanvien'
            ],
            [
                'tenLoai' => 'thukho'
            ],
            [
                'tenLoai' => 'user'
            ]
        );

        DB::table('trangThai')->insert(
            [
                'tenTH' => 'Chờ duyệt',
            ],
            [
                'tenTH' => 'Sẵn sàng',
            ],
            [
                'tenTH' => 'Đã giao',
            ]
        );

        DB::table('nhaCungCap')->insert([
            [
                'tenNCC' => "Kim đồng"
            ]
        ]);

        DB::table('nguoidung')->insert([
            'tenND' => Str::random(10),
            'gioiTinh' => 0,
            'maLND' => 1,
            'ngaySinh' => new DateTime('today'),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
        ], [
            'tenND' => Str::random(10),
            'gioiTinh' => 0,
            'maLND' => 1,
            'ngaySinh' => new DateTime('today'),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('tacGia')->insert([
            [
                'tenTG' => "Thích đọc sách",
                'diaChi' => "04 Hải Hồ",
                'SDT' => "0935443210",
            ]
        ]);

        DB::table('danhMucSP')->insert([
            [
                'tenDM' => "Tiếng Việt"
            ]
        ]);

        DB::table('nhomSP')->insert([
        [
            "tenNSP" => "Thiếu Nhi",
            "maDM" => 1,
        ],
        [
            "tenNSP" => "Kỹ năng sống",
            "maDM" => 1,
        ],
        [
            "tenNSP" => "Văn học",
            "maDM" => 1,
        ],
        [
            "tenNSP" => "Kinh tế",
            "maDM" => 1,
        ]
        ]);
        DB::table('HinhAnh')->insert([
            [
                'maSP' => 1,
                'duongDan' => 'images/product/sach/dac-nhan-tam.jpg'
            ],
            [
                'maSP' => 2,
                'duongDan' => 'images/product/sach/e167641dc7cd88d776b8205d9bd65b20.jpg'
            ],
            [
                'maSP' => 3,
                'duongDan' => 'images/product/sach/17262447faaef713be60d6b25ec0551d.jpg'
            ],
            [
                'maSP' => 4,
                'duongDan' => 'images/product/sach/cac2e0ac6f4395d400d29f1aba941d68.jpg'
            ],
            [
                'maSP' => 5,
                'duongDan' => 'images/product/sach/202015881b04b7c8a4b47d15cf9c049f.jpg'
            ],
            [
                'maSP' => 6,
                'duongDan' => 'images/product/sach/537f7b9bb219be81e217e0c7b5b037e6.jpg'
            ],
            [
                'maSP' => 7,
                'duongDan' => 'images/product/sach/c4a78eb2f28d4af61b3d669ee4b2bfb6.jpg'
            ],
            [
                'maSP' => 8,
                'duongDan' => 'images/product/sach/6e0910413382398e83754498dfbf725d.jpg'
            ],
            [
                'maSP' => 9,
                'duongDan' => 'images/product/sach/0dcc6e04aca0a78cda09a2d8b156dccb.jpg'
            ],
            [
                'maSP' => 10,
                'duongDan' => 'images/product/sach/902927dd448914d027d63e8c50a2cf28.jpg'
            ],
            [
                'maSP' => 11,
                'duongDan' => 'images/product/sach/36e9a78448c9cb46d94f49e0e507b569.jpg'
            ],
            [
                'maSP' => 12,
                'duongDan' => 'images/product/sach/b1315d221851b6ae34d06069bc4f1dce.jpg'
            ]
        ]);
        DB::table('SanPham')->insert([
            [
                'tenSP' => "Đắc nhân tâm",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'tenSP' => "Có Một Người Từng Là Tất Cả",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'tenSP' => "Vui Vẻ Không Quạu Nha",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'tenSP' => "Con Chim Xanh Biếc Bay Về",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'tenSP' => "Hai Số Phận",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],            [
                'tenSP' => "Tôi Quyết Định Sống Cho Chính Tôi",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'tenSP' => "Đàn Ông Sao Hỏa Đàn Bà Sao Kim",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'tenSP' => "Giải Mã Siêu Trí Nhớ",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'tenSP' => "999 Lá Thư Gửi Cho Chính Mình ",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'tenSP' => "Chùm Nho Phẫn Nộ",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'tenSP' => "Biến Thân",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'tenSP' => "Xứ Tuyết",
                'gia' => rand(100000, 1000000),
                'soLuong' => rand(1000, 100000),
                'maTG' => 1,
                'maNhomSP' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],

        ]);
    }
}
