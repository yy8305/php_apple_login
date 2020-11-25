# 개요 (Overview)
- 애플로그인 처리하는 소스입니다.

- php codeigniter framework 기반으로 작성되었습니다.

- config에 설정하는 키 값들은 아래 참고 url중에 [애플로그인 참고]를 보시면 알수 있습니다.

- 소스구조는 아래 [소스 구조 참고 url] 에 있는 내용을 기반으로 만들었습니다.

> - 소스를 보시면 알겠지만 토큰에 이메일 등의 정보가 포함되어 있습니다.
> -  scope 에 name이 들어 가있지만 애플에서 name은 넘겨주지 않습니다. 
> - ※ 애플에서 토큰을 가져올때 어떤 계정에서는 이메일을 못받아 오더라고요.. 유의해주세요. (그것도 모르고 성공했는데 계속 삽질하고 있었어요...ㅠㅠ)

# 프로젝트 구조
- config
    - apple key 설정정보
- controllers
    - 애플에서 받은 내용들로 로그인 처리
- libraries
    - 애플에서 정보를 받아오기 위한 처리
- views
    - 사용자 화면

# 참고 url
- php 소스 구조 참고 url
    - https://www.cikorea.net/bbs/view/tip?idx=15985&page=4&hit=not
        - https://github.com/songwritersg/codeigniter-social-login

- 애플로그인 참고
    - https://programmar.tistory.com/m/43

    - https://qiita.com/clom/items/17b84ea502adc4815a53

    - https://www.codebee.co.th/labs/วิธีทำ-apple-login-เข้าสู่ระบบด้ว/amp/

    - https://darkstart.tistory.com/116?category=871909

    - https://fluffy.es/how-to-solve-invalid_client-error-in-sign-in-with-apple/

    - https://whitepaek.tistory.com/61