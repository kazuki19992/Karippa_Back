# Karippa_Back

## API仕様

### ヘルスチェック(リクエスト)
```json
{
	"appver":"0.00",                // クライアントのアプリのバージョン
	"token":"XXXXXXXXXXX"			// トークン
}
```
### ヘルスチェック(レスポンス)
```json
{
	"latest_appver":"0.00",         // アプリの最新バージョン
	"oldest_appver":"0.00",         // アプリのサポートしている古いバージョン
	"user":{						// ユーザー情報
		"user_id":"000000000",
		"user_name":"hogehoge"
	},
	"groups":[						// 加入しているグループ情報
		{
			"group_id":"000000000",
			"group_name":"group-name"
		},{
			"group_id":"000000000",
			"group_name":"group-name"
		},{
			"group_id":"000000000",
			"group_name":"group-name"
		}
	],
	"premium":"course1"			// プレミアムコースか否か
}
```



## DB構成
### users
- id
  - UserID
- token
  - トークンのハッシュ値
- name
  - ユーザーネーム

### groups
- id
  - GroupID
- 