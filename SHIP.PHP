<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>船舶靠泊時間判斷</title>
</head>
<body>
    <h1>船舶靠泊時間判斷系統</h1>

    <label for="hours">請輸入船舶靠泊時間（小時）：</label>
    <input type="number" id="hours" min="0" step="any">

    <button onclick="checkBerthing()">開始判斷</button>

    <h2 id="result"></h2>

    <script>
        function checkBerthing() {
            // 取得使用者輸入的靠泊時間
            let hours = document.getElementById("hours").value;
            let result = document.getElementById("result");

            // 檢查輸入是否有效
            if (hours.trim() === "" || !Number.isFinite(Number(hours)) || Number(hours) < 0) {
                result.textContent = "請輸入有效的靠泊時間！";
                return;
            }

            // 判斷靠泊類型
            if (Number(hours) >= 20) {
                result.textContent = "長時間靠泊";
            } else {
                result.textContent = "一般靠泊";
            }
        }
    </script>
</body>
</html>