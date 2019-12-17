CREATE DATABASE math;
USE math;

CREATE TABLE yeonma_math1 (
    BigMem VARCHAR(50) NULL,
    BigNum NUMBER,
    SmlMem VARCHAR(50) NULL,
    SmlNum NUMBER;
    CompleteDate DATE,
    CompleteTrue BOOLEAN
);

CREATE TABLE ssen_math1 (
    BigMem VARCHAR(50) NULL,
    BigNum NUMBER,
    MidMem VARCHAR(50) NULL,
    MidNum NUMBER,
    SmlMem VARCHAR(50) NULL,
    SmlNum NUMBER;
    CompleteDate DATE,
    CompleteTrue BOOLEAN
);

CREATE TABLE yeonma_huaktong (
    BigMem VARCHAR(50) NULL,
    BigNum NUMBER,
    SmlMem VARCHAR(50) NULL,
    SmlNum NUMBER;
    CompleteDate DATE,
    CompleteTrue BOOLEAN
);

CREATE TABLE ssen_huaktong (
    BigMem VARCHAR(50) NULL,
    BigNum NUMBER,
    MidMem VARCHAR(50) NULL,
    MidNum NUMBER,
    SmlMem VARCHAR(50) NULL,
    SmlNum NUMBER;
    CompleteDate DATE,
    CompleteTrue BOOLEAN
);

INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수', 1, '거듭제곱', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수', 1, '거듭제곱근의 뜻과 성질', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수', 1, '지수의 확장', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수', 1, '유형Master', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수', 1, '유형Review', 5, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그', 2, '로그', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그', 2, '로그의 성질', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그', 2, '상용로그', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그', 2, '유형Master', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그', 2, '유형Review', 5, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수함수', 3, '지수함수', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수함수', 3, '지수함수의 그래프의 평행이동과 대칭이동', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수함수', 3, '지수함수의 최대·최소', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수함수', 3, '지수방정식', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수함수', 3, '지수부등식', 5, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수함수', 3, '유형Master', 6, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '지수함수', 3, '유형Riview', 7, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그함수', 4, '로그함수', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그함수', 4, '로그함수의 그래프의 평행이동과 대칭이동', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그함수', 4, '로그함수의 최대·최소', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그함수', 4, '로그방정식', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그함수', 4, '로그부등식', 5, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그함수', 4, '유형Master', 6, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('지수함수와 로그함수', 1, '로그함수', 4, '유형Riview', 7, 0);


INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수', 1, '일반각', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수', 1, '호도법', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수', 1, '부채꼴의 호와 길이와 넓이', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수', 1, '삼각함수', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수', 1, '삼각함수의 값의 부호', 5, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수', 1, '삼각함수 사이의 관계', 6, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수', 1, '유형Master', 7, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수', 1, '유형Riview', 8, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 그래프', 2, '주기함수', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 그래프', 2, '함수 y=sinx, y=cosx의 성질', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 그래프', 2, '함수 y=tanx의 성질', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 그래프', 2, '삼각함수의 최대·최소와 주기', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 그래프', 2, '여러 가지 각에 대한 삼각함수의 성질', 5, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 그래프', 2, '삼각방정식과 삼각부등식', 6, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 그래프', 2, '유형Master', 7, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 그래프', 2, '유형Riview', 8, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 활용', 3, '사인법칙', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 활용', 3, '코사인법칙', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 활용', 3, '삼각형의 넓이', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 활용', 3, '사각형의 넓이', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 활용', 3, '유형Master', 5, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('삼각함수', 2, '삼각함수의 활용', 3, '유형Riview', 6, 0);


INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '등차수열', 1, '수열', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '등차수열', 1, '등차수열', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '등차수열', 1, '등차수열의 합', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '등차수열', 1, '유형Master', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '등차수열', 1, '유형Review', 5, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '등비수열', 2, '등비수열', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '등비수열', 2, '등비수열의 합', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '등비수열', 2, '원리합계', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '등비수열', 2, '유형Master', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '등비수열', 2, '유형Review', 5, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '수열의 합', 3, '기호 ∑의 뜻과 성질', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '수열의 합', 3, '자연수의 거듭제곱의 합', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '수열의 합', 3, '여러 가지 수열의 합', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '수열의 합', 3, '유형Master', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '수열의 합', 3, '유형Review', 5, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '수학적 귀납법', 4, '등차수열의 귀납적 정의', 1, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '수학적 귀납법', 4, '등비수열의 귀납적 정의', 2, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '수학적 귀납법', 4, '수학적 귀납법', 3, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '수학적 귀납법', 4, '유형Master', 4, 0);
INSERT INTO ssen_math1 (BigMem, BigNum, MidMem, MidNum, SmlMem, SmlNum, CompleteTrue) VALUES ('수열', 3, '수학적 귀납법', 4, '유형Review', 5, 0);
INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '거듭제곱
', 1, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '거듭제곱근
', 2, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '거듭제곱근의 성질
', 3, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '지수의 확장
', 4, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '거듭제곱근의 대소 비교
', 5, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '지수법칙의 응용
', 6, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '로그
', 7, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '로그의 기본 성질
', 8, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '로그의 밑의 변환 공식
', 9, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '로그의 여러 가지 성질
', 10, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '상용로그
', 11, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '상용로그표
', 12, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '상용로그의 성질과 활용
', 13, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '지수함수의 뜻과 그 그래프
', 14, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '지수함수의 최대·최소
', 15, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '로그함수의 뜻과 그 그래프
', 16, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '로그함수의 최대·최소
', 17, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '지수방정식
', 18, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '지수부등식
', 19, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '로그방정식
', 20, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('지수함수와 로그함수', 1, '로그부등식
', 21, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('삼각함수', 2, '일반각과 호도법
', 1, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('삼각함수', 2, '삼각함수
', 2, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('삼각함수', 2, '삼각함수 사이의 관계
', 3, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('삼각함수', 2, '삼각함수의 그래프
', 4, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('삼각함수', 2, '삼각함수의 성질
', 5, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('삼각함수', 2, '삼각함수의 활용
', 6, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('삼각함수', 2, '사인법칙
', 7, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('삼각함수', 2, '코사인법칙
', 8, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('삼각함수', 2, '도형의 넓이
', 9, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '﻿수열의 뜻
', 1, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '등차수열
', 2, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '등차수열을 이루는 수
', 3, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '등차수열의 합
', 4, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '등비수열
', 5, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '등비중항
', 6, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '등비수열의 합
', 7, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '수열의 합과 일반항 사이의 관계
', 8, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '등비수열의 활용
', 9, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '합의 기호 ∑
', 10, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '∑의 성질
', 11, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '자연수의 거듭제곱의 합
', 12, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '분수꼴로 주어진 수열의 합
', 13, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '(등차수열) × (등비수열) 꼴의 수열의 합
', 14, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '여러 가지 수열
', 15, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '수열의 귀납적 정의
', 16, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '여러 가지 수열의 귀납적 정의
', 17, 0);INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('수열', 3, '수학적 귀납법', 18, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('순열과 조합', 1, '﻿원순열
', 1, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('순열과 조합', 1, '중복순열
', 2, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('순열과 조합', 1, '같은 것이 있는 순열
', 3, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('순열과 조합', 1, '중복조합
', 4, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('순열과 조합', 1, '이항정리
', 5, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('순열과 조합', 1, '파스칼의 삼각형
', 6, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('순열과 조합', 1, '이항계수의 성질', 7, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('확률', 2, '﻿시행과 사건
', 1, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('확률', 2, '수학적 확률과 통계적 확률
', 2, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('확률', 2, '확률의 기본 성질과 덧셈정리
', 3, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('확률', 2, '여사건의 확률
', 4, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('확률', 2, '조건부확률
', 5, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('확률', 2, '확률의 곱셈정리
', 6, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('확률', 2, '사건의 독립과 종속
', 7, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('확률', 2, '독립시행의 확률', 8, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '﻿확률변수와 확률분포
', 1, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '이산확률변수와 확률질량함수
', 2, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '이산확률변수의 기댓값(평균), 분산, 표준편차
', 3, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '이산확률변수 aX+b의 평균, 분산, 표준편차
', 4, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '이항분포
', 5, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '연속확률변수와 확률밀도함수
', 6, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '정규분포
', 7, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '정규분포곡선의 성질
', 8, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '표준정규분포
', 9, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '이항분포와 정규분포의 관계
', 10, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '모집단과 표본
', 11, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '모집단과 표본평균
', 12, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '표본평균의 평균, 분산, 표준편차
', 13, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '표본평균의 분포
', 14, 0);INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES
('통계', 3, '모평균의 추정', 15, 0);