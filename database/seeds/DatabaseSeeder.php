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
            "tenNSP" => "Thiếu Nhi",
            "maDM" => 1,
        ], [
            "tenNSP" => "Kỹ năng sống",
            "maDM" => 1,
        ], [
            "tenNSP" => "Văn học",
            "maDM" => 1,
        ], [
            "tenNSP" => "Kinh tế",
            "maDM" => 1,
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
                'tenSP' => "Con Chim Xanh Biếc Bay Về ",
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
