Viết module Blog cho Magento 2.

Yêu cầu:

Module name: SmartOSC_Blog

Backend:
- Cho phần quản lý categories, posts (Có phân quyền ACL).
- Phần quản lý categories: có thể chọn posts sẽ đc assign vào category.
- Phần quản lý posts: có thể nhúng widget voucher vào post.
- Có phần configurations:
+ Bật/tắt chức năng.
+ Thay đổi path của URL.
+ Bật/tắt các widget: categories, tags, search

Frontend:

- Format hiển thị trang posts: Page Title là Category Title, đầu trang là description của category. Tiếp theo là post listing: Bao gồm ảnh thumbnail bài viết + title + ngày post + tác giả.
- Format hiển thị trang post: Page Title + ảnh + content bài viết + ngày post + tác giả.
- Có widget categories, tags và tìm kiếm.
- Có thể hiển thị posts theo category, đường dẫn theo format "{configured_path/category_slug}" (configured_path đã config trong admin).
- Có thể hiển thị posts theo tags, đường dẫn theo format "{configured_path/tag/tag_name}" (configured_path đã config trong admin).
- Có thể hiển thị post theo format đã define bên trên, đường dẫn theo format "{configured_path/post_slug}.html" (configured_path đã config trong admin)..
- Cuối bài post, nếu trong admin nhúng widget voucher thì sẽ hiển thị nút "Click here to get a voucher", sau khi bấm thì sẽ generate coupon code theo voucher đã config trong admin và hiển thị (yêu cầu coupon code chỉ có thể sử dụng 1 lần. hạn 10 ngày sau khi render).

API: Restful API để thêm/sửa/xóa, GraphQL dùng để hiển thị nội dung lên PWA
- Có Restful API thêm/sửa/xóa categories
- Có Restful API thêm/sửa/xóa posts

Có GraphQL:

+ Lấy thông tin categories
+ Lấy thông tin category (dựa vào slug): title, description, posts (có phần trang)
+ Lấy thông tin bài viết (dựa vào slug): title, content (bao gồm cả chức năng voucher)
+ Search bài viết (có phân trang)

Yêu cầu thêm:
2 tuần để hoàn thành.
Trong module có file README.md để thêm cái checklist bao gồm các nội dung trên. Làm được cái nào thì tick vào checklist sau nộp bài anh biết phần nào làm rồi phần nào chưa.
