<?php
    
    use Illuminate\Support\Facades\Storage;

    function getRequirementPayment($requirement_payment = null)
    {
        if (!$requirement_payment) {
            return [
                "1" => "COD",
                "2" => "Ví shopee",
                "3" => "Ví airpay",
                "4" => "Sao cũng được"
            ];
        }
        switch ($requirement_payment) {
        case 1:
            return "COD";
        case 2:
            return "Ví shopee";
        case 3:
            return "Ví airpay";
        case 4:
            return "Sao cũng được";
        }
    }

    function getIsApplyFreeship($isApply = null)
    {
        if (!$isApply) {
            return [
                "1" => "Không",
                "2" => "Có",
                "3" => "Có thì càng tốt"
            ];
        }
        switch ($isApply) {
            case 1:
                return "Không";
            case 2:
                return "Có";
            case 3:
                return "Có thì càng tốt";
            }
    }

    function getTransactionOrderStatus($status)
    {
        switch ($status) {
            case 0:
                return "Vừa gửi yêu cầu đặt";
            case 1:
                return "Xác nhận đã đặt";
            case 2:
                return "Chủ shop đã ck tiền cho hệ thống";
            case 3:
                return "Đơn thành công";
            case 4:
                return "Đơn thất bại";
        }
    }

    function getTransactionNotTransfer($key, $data)
    {
        $responses = [];
        foreach($data as $transactionOrder) {
            $basePostId = $transactionOrder->$key;
            if (isset($responses[$basePostId])) {
                if ($transactionOrder->transaction_status == 1) {
                    $responses[$basePostId][] = $transactionOrder;
                }
            } else {
                if ($transactionOrder->transaction_status == 1) {
                    $responses[$basePostId] = [$transactionOrder];
                }
            }
        }

        return $responses;
    }

    function uploadEvidence($image)
    {
        $fileName   = time() . '.' . $image->getClientOriginalExtension();

        $img = Image::make($image->getRealPath());
        $img->resize(500, 500, function ($constraint) {
            $constraint->aspectRatio();                 
        });

        $img->stream(); // <-- Key point

        $path = 'public/evidence_transfer' . '/' . $fileName;
        Storage::disk('local')->put($path, $img, 'public');
        return 'evidence_transfer' . '/' . $fileName;
    }

    function uploadThumbnailPost($image)
    {
        $fileName   = time() . '.' . $image->getClientOriginalExtension();

        $img = Image::make($image->getRealPath());
        $img->resize(500, 500, function ($constraint) {
            $constraint->aspectRatio();                 
        });

        $img->stream(); // <-- Key point

        $path = 'public/product/thumbnail' . '/' . $fileName;
        Storage::disk('local')->put($path, $img, 'public');
        return 'product/thumbnail' . '/' . $fileName;
    }

    function getPostStatus($status)
    {
        if ($status == 1) return "Đã duyệt";
    }

    function groupbyKey($key, $data)
    {
        $responses = [];
        foreach($data as $transactionOrder) {
            $basePostId = $transactionOrder->$key;
            if (isset($responses[$basePostId])) {
                $responses[$basePostId][] = $transactionOrder;
            } else {
                $responses[$basePostId] = [$transactionOrder];
            }
        }
        return $responses;
    }
?>
